Here's an example of what the README file for the above problem statement might look like:

# Social Media API

This is a RESTful API built using Laravel and MySQL for a social media platform. It supports user registration, authentication, creating and managing posts, comments, likes, and user profiles, as well as searching and following other users.

## Requirements

- PHP 7.4 or higher
- Composer
- MySQL 5.7 or higher

## Installation

1. Clone the repository: `git clone https://github.com/your-username/social-media-api.git`
2. Install dependencies: `composer install`
3. Copy the .env.example file to .env: `cp .env.example .env`
4. Generate an application key: `php artisan key:generate`
5. Configure the database connection in the .env file
6. Run the migrations and seed the database: `php artisan migrate --seed`

## Usage

To start the development server, run `php artisan serve`. You can then use a tool like Postman to make requests to the API.

## Endpoints

### User management

- `POST /api/register`: Register a new user
- `POST /api/login`: Login and get a JWT token
- `POST /api/logout`: Logout and invalidate the JWT token
- `PUT /api/users/{id}`: Update a user's profile
- `PUT /api/users/{id}/password`: Update a user's password
- `GET /api/users/{id}`: Get a user's profile by ID
- `GET /api/users?search={query}`: Search for users by username
- `POST /api/users/{id}/follow`: Follow a user by ID
- `POST /api/users/{id}/unfollow`: Unfollow a user by ID

### Post management

- `POST /api/posts`: Create a new post
- `PUT /api/posts/{id}`: Update a post by ID
- `DELETE /api/posts/{id}`: Delete a post by ID
- `GET /api/posts`: Get all posts
- `GET /api/posts/user/{id}`: Get all posts by a user's ID
- `GET /api/posts/following`: Get all posts by users being followed
- `GET /api/posts/search?query={query}`: Search for posts by keyword

### Comment management

- `POST /api/comments`: Create a new comment
- `PUT /api/comments/{id}`: Update a comment by ID
- `DELETE /api/comments/{id}`: Delete a comment by ID
- `GET /api/comments/post/{id}`: Get all comments for a post by ID

### Like management

- `POST /api/likes`: Like a post
- `DELETE /api/likes/{id}`: Unlike a post by ID
- `GET /api/likes/post/{id}`: Get all likes for a post by ID

## Testing

To run the test suite, run `vendor/bin/phpunit`. This will run the unit tests and output the results.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
