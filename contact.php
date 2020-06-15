<?php 
$title = "contact";
require "include/header.php"; ?>


<main class="mt-5">
    <div class="paragraph mt-3 mb-3  ">
        <h2>Contact</h2>
        <div class="row">

            <div class="col-md-8">


                <ul class="list">
                    <li><a href="https://github.com/JaronVW">Github</a></li>
                    <li><a href="https://github.com/SebastianTramper/SnoepjesKoning">Linkedin</a></li>

                </ul>

            </div>

        </div>
        <form method="post" action="phpmailer.php" >
            <div class="p-5">

            <div class="row"> 
                <div class=" form-group col-md-6 ">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" id="name"  >
                </div>
               
                <div class=" form-group col-md-6 ">
                    <label for="email">Email: </label>
                    <input type="email" class="form-control" name="email" id="email" >
                </div>
            </div> 
            <div class="row"> 
                <div class=" form-group col-md-6 ">
                    <label for="subject">Subject:</label>
                    <input type="subject" class="form-control " name="subject" id="subject"  >
                </div>
               
                <div class=" form-group col-md-6 ">
                    <label for="text">Text: </label>
                    <input type="text" class="form-control" name="text" id="text" >
                </div>
            </div> 
              
                
                <input type="submit" name="submit"  value="Submit" class="btn btn-primary">
            </div>
        </form>

    </div>
</main>




</div>
</div>


<?php require "include/footer.php"; ?>