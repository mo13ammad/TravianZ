# nalooti Docker Setup

This guide will help you set up nalooti using Docker and Docker Compose for easy deployment.

## Prerequisites

- Docker Engine 20.10 or higher
- Docker Compose 1.29 or higher
- At least 2GB of free RAM
- At least 5GB of free disk space

## Quick Start

### 1. Clone the Repository

```bash
git clone https://Nalooti.ir
cd nalooti
```

### 2. Configure Environment Variables

Copy the example environment file and customize it if needed:

```bash
cp .env.example .env
```

Edit `.env` file to set your database credentials:

```env
DB_HOST=db
DB_PORT=3306
DB_DATABASE=travian
DB_USERNAME=nalooti
DB_PASSWORD=yourStrongPassword
DB_ROOT_PASSWORD=yourStrongRootPassword
```

### 3. Start the Containers

```bash
docker compose up -d
```

This command will:
- Build the nalooti web application container
- Start a MariaDB (latest) database container
- Start a phpMyAdmin container for database management
- Set up a network for all containers to communicate

### 4. Access the Installation Wizard

Once the containers are running, open your browser and navigate to:

```
http://localhost:8080/install
```

### 5. Complete the Installation

During the installation wizard, use these database settings:

- **SQL Hostname:** `db` (this is the Docker container name)
- **Port:** `3306`
- **Username:** `nalooti` (or `DB_USERNAME` from your `.env` file)
- **Password:** `nalootipass` (or `DB_PASSWORD` from your `.env` file)
- **DB name:** `travian` (or `DB_DATABASE` from your `.env` file)
- **Prefix:** `s1_` (or customize as needed)
- **Type:** `MYSQLi`

Complete the rest of the installation wizard with your preferred server settings.

## Services and Ports

After starting the containers, the following services will be available:

- **nalooti Web Application:** http://localhost:8080
- **phpMyAdmin:** http://localhost:8081 (Requires manual login)
- **MariaDB Database:** localhost:3306 (for external connections)

### phpMyAdmin Access
To access phpMyAdmin, use the credentials defined in your `.env` file (or the default ones in `docker-compose.yml`):
- **Server:** `db`
- **Username:** `nalooti` (or `root`)
- **Password:** Your defined password (default for `nalooti` is `nalootipass`)

## Container Management

### View Running Containers

```bash
docker compose ps
```

### View Logs

```bash
# All containers
docker compose logs

# Specific container
docker compose logs web
docker compose logs db
docker compose logs phpmyadmin

# Follow logs in real-time
docker compose logs -f web
```

### Stop Containers

```bash
docker compose down
```

### Stop and Remove All Data

**WARNING:** This will delete all database data!

```bash
docker compose down -v
```

### Restart Containers

```bash
docker compose restart
```

### Rebuild Containers

If you make changes to the Dockerfile or application code:

```bash
docker compose down
docker compose up -d --build
```

## Accessing the Containers

### Access Web Container Shell

```bash
docker exec -it nalooti-web bash
```

### Access MySQL Container

```bash
docker exec -it nalooti-db mysql -u root -p
```

Enter the root password from your `.env` file.

## Troubleshooting

### Installation Files Not Writable

If you get permission errors during installation:

```bash
docker exec -it nalooti-web chown -R www-data:www-data /var/www/html
docker exec -it nalooti-web chmod -R 777 /var/www/html/var
```

### Database Connection Failed

1. Make sure the database container is running:
   ```bash
  docker compose ps
   ```

2. Check database logs:
   ```bash
  docker compose logs db
   ```

3. Verify the hostname is set to `db` (not `localhost` or `127.0.0.1`)

### Reset Installation

If you need to start the installation over:

1. Stop containers:
   ```bash
  docker compose down -v
   ```

2. Remove the installed flag:
   ```bash
   rm -f var/installed
   rm -f GameEngine/config.php
   ```

3. Start containers again:
   ```bash
  docker compose up -d
   ```

4. Access the installation wizard again at http://localhost:8080/install

### Applying Database Changes
If you need to manually apply database changes (like the new `announcements` table), you can do so through phpMyAdmin or via the command line:

```bash
docker exec -i nalooti-db mariadb -u root -pYourRootPassword travian < var/db/announcements.sql
```

Note: Replace `%PREFIX%` in the SQL file with your actual table prefix (default is `s1_`).

### Port Already in Use

If port 8080 or 8081 is already in use, edit `docker compose` configuration (`docker-compose.yml`) and change the ports:

```yaml
services:
  web:
    ports:
      - "9080:80"  # Change 8080 to any available port
  phpmyadmin:
    ports:
      - "9081:80"  # Change 8081 to any available port
```

## Backup and Restore

### Backup Database

```bash
docker exec nalooti-db mariadb-dump -u root -p travian > backup_$(date +%Y%m%d).sql
```

### Restore Database

```bash
docker exec -i nalooti-db mariadb -u root -p travian < backup_20231125.sql
```

### Backup Application Files

```bash
tar -czf nalooti_backup_$(date +%Y%m%d).tar.gz \
  --exclude='./var/db' \
  --exclude='./.git' \
  .
```

## Production Deployment

For production environments, consider the following:

1. **Use Strong Passwords:** Change all default passwords in `.env`

2. **Use SSL/TLS:** Set up a reverse proxy (nginx/traefik) with Let's Encrypt

3. **Limit Database Access:** Remove the database port exposure in the `docker compose` configuration (`docker-compose.yml`)

4. **Regular Backups:** Set up automated backup scripts

5. **Resource Limits:** Add resource constraints to containers:

```yaml
services:
  web:
    deploy:
      resources:
        limits:
          cpus: '1.0'
          memory: 1G
```

6. **Monitoring:** Consider adding monitoring tools like Prometheus and Grafana

## Performance Optimization

### MariaDB Tuning

Edit `docker-compose.yml` to add MariaDB configuration:

```yaml
services:
  db:
    command: >
      --sql_mode=""
      --max_connections=200
      --innodb_buffer_pool_size=512M
      --query_cache_size=32M
      --query_cache_limit=2M
```

### PHP Tuning

Create a custom PHP configuration file `php-custom.ini`:

```ini
memory_limit = 256M
upload_max_filesize = 20M
post_max_size = 20M
max_execution_time = 300
```

Then mount it in `docker-compose.yml`:

```yaml
services:
  web:
    volumes:
      - ./php-custom.ini:/usr/local/etc/php/conf.d/custom.ini
```

## Updates

To update nalooti to the latest version:

```bash
git pull origin main
docker compose down
docker compose up -d --build
```

## Support

For issues and questions:
- GitHub Issues: https://Nalooti.ir
- Gitter Chat: https://gitter.im/nalooti-V8/Lobby

## License

nalooti Project - See LICENSE file for details
