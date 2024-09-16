# ZombieSharp-Stats

Web player stats for ZombieSharp: <https://github.com/oylsister/ZombieSharp>

## Installation

1. **Clone the repository**:

   ```shell
   git clone https://github.com/oylsister/ZombieSharp-Stats.git
   cd ZombieSharp-Stats
   ```

2. **Install PHP dependencies**

   ```shell
    composer install
    ```

3. **Install JavaScript dependencies**

    ```shell
    npm install
    ```

4. **Set up environment variables**

    Copy the `.env.example` file to `.env` and configure your environment variables.
   
    ```shell
    cp .env.example .env
   ```

5. **Generate application key**

    ```shell
    php artisan key:generate
    ```

6. **Run database migrations**

    ```shell
    php artisan migrate
    ```

7. **Serve the application**

    ```shell
    php artisan serve
    ```
   
## Optional Data Dummy (for development purpose)

   ```shell
   php artisan db:seed --class=PlayerStatisticSeeder
   ```

Application should now be running at <http://localhost:8000/stats>.