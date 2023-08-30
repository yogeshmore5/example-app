
# Example App

Simple App with REST APIs to do CRUD operations on places

## Deployment and running locally

To set up project locally

#### Clone

```bash
  https://gitlab.com/MBYogesh/example-app.git
```

#### Go inside directory

```bash
  cd example-app
```

#### create and modify  .env file. Create a copy of env.example and then rename as .env

```bash
  Add database details correctly. Considering mysql db
```

#### install packages - Considering composer is already installed

```bash
  composer install
```

#### Run migration to create required tables. this will create tables in connected db

```bash
  php artisan migrate
```

#### Run project.

```bash
  php artisan serve
```







## API Reference

#### Get all places

```http
  GET /api/places
```

#### Get specific place using id

```http
  GET /api/places/{id}
```

#### Save New Place

```http
  POST /api/places/
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `name`      | `string` | **Required**. Place name |
| `country`      | `string` | **Required**. Country of place |
| `state`      | `string` | **Required**. state of place |
| `best_month_to_visit`      | `string` | **Required**. best month to visit |
| `best_season_to_visit`      | `string` | **Required**. best season to visit |
| `is_active`      | `boolean` | **Required**. is record active |
| `photo_name`      | `string` | **Required**. photo name |
| `photo`      | `file` | **Required**. actual photo |

#### Save New Place

```http
  PUT /api/places/
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `number` | **Required**. Id of Place  |
| `name`      | `string` | **Required**. Place name |
| `country`      | `string` | **Required**. Country of place |
| `state`      | `string` | **Required**. state of place |
| `best_month_to_visit`      | `string` | **Required**. best month to visit |
| `best_season_to_visit`      | `string` | **Required**. best season to visit |
| `is_active`      | `boolean` | **Required**. is record active |
| `photo_name`      | `string` | **Required**. photo name |
| `photo`      | `file` | **Required**. actual photo |
