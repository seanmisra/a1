<!DOCTYPE HTML>
<html lang = "en">
    <head>
        <title>Sean Misra</title>
        <meta charset="UTF-8">
        <meta name = "description" content="Sean Misra Profile">
        <meta name ="author" content="Sean Misra">
        <meta name="keywords" content="Harvard,Sean,Misra,CSCI E-15">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <header>
        <div class="jumbotron">
            <h1>Sean Misra</h1>
            <p>Built for CSCI E-15 - Spring 2017</p>
        </div>
    </header>
    
    <body>
        <div class="container">
            <div class = "row">
                <div class="col-md-4">
                    <img src = "Images/my_photo.jpg" id ="profile_pic" alt = "A student in his mid-twenties with a collared blue shirt and polished hair smiles gently" title = "Picture taken in Mexico by ocean" height = "270">
                </div>
                <div class="col-md-8">
                    <p class = "lead">  
                        Over the last two years, I have picked up HTML/CSS/JavaScript and basic PHP through small-business work and online videos. I think this class will be a great opportunity to get reps in the "browser" languages, while gaining a deeper understanding of PHP. I have been exposed to the CakePHP framework and look forward to learning Laravel. In addition to CSCI E-15, I am taking <a href = "https://www.extension.harvard.edu/academics/courses/java-8-hadoop-mapreduce-programming-model/24036?_ga=1.186080107.3998958550.1468973750CSCI"
                        target ="_blank">CSCI E-55</a> this spring, and I took <a href ="https://www.extension.harvard.edu/academics/courses/systems-programming-machine-organization/13836?_ga=1.78648534.3998958550.1468973750CSCI"
                        target= "_blank"> CSCI E-61</a> last semester. I'm working to round out my fundamentals in software engineering, as I aim to take it from a passsion to a professsion. In 2015, I graduated from Northeastern University with an MBA. Recently, I have worked at Fidelity Investments, Ernst & Young, and Liberty Mutual.
                    </p>
                </div>
            </div>
            <br>
            <br>
            <blockquote>
                <p class="mb-0">
                    <?php
                        $random_number = rand(1, 3);
                        switch ($random_number) {
                          case 1:
                            echo "The brain weighs only three pounds, yet it is the most complex object in the solar system";
                            break;
                          case 2:
                            echo "To understand the difficulty of predicting the next 100 years, we have to appreciate the difficulty that the people of 1900 had in predicting the world of 2000";
                            break;
                          case 3:
                            echo "Today, your cell phone has more computer power than all of NASA back in 1969, when it placed two astronauts on the moon";
                            break;
                          default:
                            echo "Oops... Error Occured with PHP Switch";
                        }
                    ?>
                </p>
                <footer class="blockquote-footer">Michio Kaku</footer>
            </blockquote>
            <br>
            <div class="btn-group">
                <a class="btn btn-primary" href="https://www.linkedin.com/in/sean-misra-0972079b?trk=hp-identity-photo" role="button" target ="_blank">LinkedIn</a>
                <a class="btn btn-primary" href="mailto:misra.s@husky.neu.edu?Subject=Hello" role="button" target ="_blank">Email Me</a>
                <a class="btn btn-primary" href="https://github.com/seanmisra" role="button" target ="_blank">Github</a>
            </div>
            <br><br>
        </div>
    </body>
</html>