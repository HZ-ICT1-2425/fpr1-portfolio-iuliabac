<html>
<main>
    <head>
        <title> Create a new Blog!</title>
        <style>
            h1 {
                text-align: center;
            }
            h2 {
                text-align: left;
            }
            p {
                text-align: left;
            }
            div.container {
                text-align: center;
            }
            ul.myUL {
                display: inline-block;
                text-align: left;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }
            img {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
            li {
                display: inline;
            }
            li {
                float: left;
            }

            a {
                display: block;
                padding: 8px;
                background-color: rgb(208, 117, 208);
            }
            ul {
                background-color: rgb(208, 117, 208);
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }
            li {
                float: left;
            }
            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
            li a:hover {
                background-color: rgb(122, 59, 122);
            }
            .active {
                background-color: rgb(66, 28, 66);
            }
        </style>
    </head>
    <body style="background-color: rgb(232, 170, 232);">
    <nav>
        <div class="container">
            <ul class="myUL">
                <li><a href="{{ route('home') }}">Index</a></li>
                <li><a href="/profile">Profile</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="/faq/index">FAQ</a></li>
                <li><a class="active" href="/posts/index">Blog</a></li>
            </ul>
        </div>
    </nav>

    <h1>Here you can create a new blog post here</h1>
    <h2><a href="/posts/index">go back</a></h2>


    <div class="field">
        <label for ="title" class="label">title</label>
        <div class="control has-icons-right">
            <input type="text" name="title" placeholder="Enter your title in here">
        </div>
    </div>

    <div class="field">
        <label for ="text" class="label">slug</label>
        <div class="control has-icons-right">
            <input type="text" name="slug" placeholder="Enter your slug in here">
        </div>
    </div>

    <div class="field">
        <label for ="text" class="label">text</label>
        <div class="control has-icons-right">
            <input type="text" name="text" placeholder="Enter your text in here">
        </div>
    </div>

    <div class="control">
        <form method="POST" action="index.php">
            <input type="submit" value="Submit">
        </form>

    </div>



    <a href="https://hz.nl/"><img
            src="https://iuliabac.github.io/hz-university-of-applied-sciences.svg"
            style="width:200px;
                   height:auto;" alt=""></a>

    </body>
</main>
