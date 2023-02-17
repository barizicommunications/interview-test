## Software Developer Laravel Test

Clone this repository on your machine

## The Task

- In this test, you will be creating a blogging site. No authentication/authorization is required to be developed.
- The site should have a home page that lists all the blog posts.
- The site should have a page that lists all the blog posts for a specific author.
- The site should have a page that lists all the blog posts for a specific category.
- You should be able to search for a blog post by title or author.

## The Requirements

- Create migrations, models and resource controllers for the following tables:
    - `posts`
    - `authors`
    - `categories`
- Create a separate migration to add the column `featured_image_url` to the `posts` table.
- Ensure foreign keys are set up correctly.
- create a seeder to populate the `authors` and `categories` tables with at least 5 records each.
- create a seeder to populate the `posts` table with at least 10 records.
- Display the records in the database on the home page, author page and category page.
- Create a relationship between the `posts` table and the `authors` table.
- Create a relationship between the `posts` table and the `categories` table.
- Create a console command that will take a string as an argument and search the `posts` table for that string in
  the `title` and `body` columns. The command should output the results to the console.
- Create a job that is dispatched when a new post is created. The job should send an email to the author of the post.

## CI/CD

- Create a `.gitlab-ci.yml` file that will run the following commands:
    - `composer install`
    - `php artisan migrate`
    - `php artisan db:seed`
    - `php artisan test`

## The Bonus

- Create an api endpoint that will return a list of posts in JSON format with the following fields (use API resources):
    - `title`
    - `slug`
    - `body`
    - `featured_image_url`
    - `author`
    - `category`
    - `created_at`
- Limit the number of posts returned to 10.
- Allow the number of posts returned to be changed by passing a query parameter to the endpoint.

## The Deliverable
- Create a pull request with your changes and inform the HR on completion.

## Console Command
- The console command created is `search:posts {search}`

## Send Mail Job
- A send mail job is dispatched during database seed to the respective Author.

## Other Notables
- The home page lists all the blog posts.
- You can access blogs for specific Author by clicking filter by Author on the top right of the blog page.
- You can access blogs for specific Category by clicking filter by Category on the top right of the blog page.
- You can search for a blog post by title or author by using the search input at the top of the page then click search.
- The bonus API Endpoint is also attended

