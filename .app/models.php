<?php

class User {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function create($username, $email, $password) {
        // Validate input
        // Hash password
        // Insert user into database
    }

    public function authenticate($email, $password) {
        // Verify email and password
        // Generate JWT token
        // Return token in response
    }

    public function update($user_id, $username, $email, $password) {
        // Validate input
        // Hash password
        // Update user in database
    }

    public function delete($user_id) {
        // Delete user from database
    }

    public function search($username) {
        // Search users by username
        // Return list of users
    }

    public function follow($follower_id, $following_id) {
        // Follow user
    }

    public function unfollow($follower_id, $following_id) {
        // Unfollow user
    }

    public function get_followers($user_id) {
        // Get list of followers for user
        // Return list of users
    }

    public function get_following($user_id) {
        // Get list of users being followed by user
        // Return list of users
    }
}

class Post {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function create($user_id, $content) {
        // Validate input
        // Insert post into database
    }

    public function update($post_id, $content) {
        // Validate input
        // Update post in database
    }

    public function delete($post_id) {
        // Delete post from database
    }

    public function get_by_user($user_id) {
        // Get list of posts by user
        // Return list of posts
    }

    public function get_timeline($user_id) {
        // Get list of posts from users being followed by user
        // Return list of posts
    }

    public function search($keyword) {
        // Search posts by keyword
        // Return list of posts
    }
}

class Comment {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function create($post_id, $user_id, $content) {
        // Validate input
        // Insert comment into database
    }

    public function update($comment_id, $content) {
        // Validate input
        // Update comment in database
    }

    public function delete($comment_id) {
        // Delete comment from database
    }

    public function get_by_post($post_id) {
        // Get list of comments on post
        // Return list of comments
    }
}

class Like {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function like($post_id, $user_id) {
        // Like post
    }

    public function unlike($post_id, $user_id) {
        // Unlike post
    }
}

// Connect to database
$conn = new mysqli("localhost", "username", "password", "database");

// Create instances of models
$user_model = new User($conn);
$post_model = new Post($conn);
$comment_model = new Comment($conn);
$like_model = new Like($conn);
