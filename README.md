# Laravel API Platform with MongoDB

API Platform announced support for Laravel Framework, using Eloquent for the
data layer. This demo uses the MongoDB integration for Laravel and Eloquent
to expose create an API for MongoDB Atlas sample dataset.

## Installation

1. Create a MongoDB Atlas cluster following the tutorial [Create a Free Tier Cluster](https://www.mongodb.com/docs/guides/atlas/cluster/create) (a free shared M0 cluster is enough for this demo)
2. Import the sample dataset following the tutorial [Load Data into Atlas](https://www.mongodb.com/docs/atlas/sample-data/)


3. Clone the repository and install the dependencies:

```bash
git clone https://github.com/GromNaN/mongodb-laravel-api-platform-demo.git
cd mongodb-laravel-api-platform-demo
composer install
```

5. Create a `.env` file from the `.env.example` file and update the MongoDB connection string:

```bash
cp .env.example .env
```

```diff
- DB_CONNECTION=mysql
+ DB_CONNECTION=mongodb

+ MONGODB_DSN=mongodb+srv://<username>:<password>@<cluster>.mongodb.net/?retryWrites=true&w=majority
+ MONGODB_DATABASE=sample_mflix
```

6. Run the server:

```bash
php artisan serve
```

7. Open the browser at [http://localhost:8000/api](http://localhost:8000/api) to see the API documentation.

