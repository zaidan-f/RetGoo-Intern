<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
    <title>Dashboard</title>
</head>


<body>

    <div class="container mt-5">
        <h1 class="display-4">
            Welcome <b>{{ auth()->user()->name ?? '' }}</b> To The Testing Site
        </h1>
        <p><h4>Hello There!</h4></p>
        <p>This is a tetsting page from laravel exercise that i make in Visual Studio Code using laravel framework</p>
        <p>Welcome to our site! We're excited to have you join our community and explore all that we have to offer. Whether you're here to connect with like-minded individuals, learn something new, or just have fun, we've got you covered. Our team has worked hard to create a user-friendly platform that is easy to navigate, so you can focus on what matters most. We encourage you to take advantage of our resources and engage with other members to make the most of your experience here. Thank you for choosing our site, and we hope you enjoy your time with us!</p>
        <br>
        <p>One day, a group of cavemen stumbled upon a strange substance. It was bright, hot, and seemed to have a life of its own. They poked and prodded at it, trying to figure out what it was. Suddenly, one of the cavemen had an idea. "What if we put food in this thing?" he exclaimed. "Maybe it will cook it!" The others looked at him skeptically, but decided to give it a try. They placed some meat on a stick and held it over the fire. After a few minutes, they took a bite. It was delicious! They couldn't believe their luck. From that day on, the cavemen made sure to keep the fire burning. But as they gathered around the flames, they realized something else. The fire was warm and comforting, and it made them feel connected to one another. And so, the invention of fire not only gave them a new way to cook food, but it also brought them closer together as a community.</p>
        <img src="https://media.tenor.com/FOTMie4QmdwAAAAM/michael-reeves.gif" alt="caveman brain" >
        <p></p>
        <br>
        <form action="/logout" method="POST">
            @csrf
            <button class="btn btn-danger">Logout</button>
        </form>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
 
</html>