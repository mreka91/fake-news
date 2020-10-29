# fake-news

![](https://media.giphy.com/media/9FW5ShdnPyKd6eCwiA/giphy.gif)

## Making a somewhat retro feel the Office US themed fake news site/blog with HTML, CSS and PHP as my first school project

### Documentation:
The news feed consists of a list of news feed items created by 5 authors, each with 2 different news feed items. 

    
The news feed items contain:

- Title
- Content
- Author
- Published date
- Like counter
- Picture
    
The author items contain:

- ID
- Full name



The project is built using the following functionality:

- Variables
- Multiple data types
- Arrays
-  Functions
- Loops 
- Output


## How to use it
1. Clone the repository https://github.com/mreka91/fake-news using Github Desktop or terminal of your choice
2. Make sure to go in the project folder using the command: cd folder/where/project is
3. Create a local server in your terminal using the command: ```php -S localhost:8000```
4. Open the browser of your choice and go to the url localhost:8000/index.php to see the page

## Testers

1. Linn Josefsson
2. 

## Feedback

- You’re being inconsistent in your class names. You’re using kebab cases everywhere except in authors.php where you’re using snake cases. I recommend that you change all classnames to kebab case to be consistent.

- Instead of repeating your code like you do in authors.php I would put all the information you want on the cards in your authors array and use foreach to loop trough it just like you do in index.php.

- You don’t have alt attributes on your images, so maybe you could add that.

-  Personally I would split the CSS into different files to make it easier to navigate.

- Very well written comments!

