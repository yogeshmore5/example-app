
# Project Title

A brief description of what this project does and who it's for


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




