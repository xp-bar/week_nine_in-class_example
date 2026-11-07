<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- loading from WAMP / MAMP: -->
        <!-- WAMP: localhost/week_nine_inclass/adopt-form.php -->
        <!-- MAMP: localhost:8888/week_nine_inclass/adopt-form.php -->
        <title>Want to adopt?</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <header>
            <h1>Want to adopt a cat?</h1>
        </header>
        <main>
            <form action="includes/scripts/process_adoption_form.php" method="POST">
                <div>
                    <label for="name">Your name:</label>
                    <input 
                        id="name" 
                        name="name" 
                        type="text" 
                        placeholder="Billy Bob"
                    >
                </div>
                <div>
                    <label for="phone_number">Your phone number:</label>
                    <input id="phone_number" name="phone_number" type="tel" placeholder="888 8888">
                </div>
                <div>
                    <label for="email">Your email:</label>
                    <!-- the 'name' attribute on the input is the key this value will be store in 
                     on the request; so 'name="email"' means the key will be 'email' -->
                    <input id="email" name="email" type="email" placeholder="info@email.com">
                </div>
                <div>
                    <label for="reason">Why do you want to adopt?</label>
                    <textarea id="reason" name="reason"></textarea>
                </div>
                <div>
                    <label for="which_cat">Which cats are you interested in?</label>
                    <select id="which_cat" name="which_cat">
                        <option value="millie">Millie</option>
                        <option value="joey">Joey</option>
                    </select>
                </div>
                <fieldset>
                    <!-- use fieldset to group inputs together if they're part of the same "question" -->
                    <legend>Which other cats are you interested in?</legend>
                    <label for="bobby">Bobby</label>
                    <input id="bobby" type="checkbox" name="other_cats[]" value="bobby">

                    <label for="sally">Sally</label>
                    <input id="sally" type="checkbox" name="other_cats[]" value="sally">

                    <label for="jimmy">Jimmy</label>
                    <input id="jimmy" type="checkbox" name="other_cats[]" value="jimmy">
                </fieldset>
                <footer>
                    <button type="submit">Send</button>
                </footer>
            </form>
        </main>
        <script src="main.js"></script>
    </body>
</html>
