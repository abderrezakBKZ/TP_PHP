

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    

    <div class="container">
        <form method="post" action="validation.php">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="user" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="mdp" placeholder="Password">
        </div>

        <?php if  (isset($_GET['error']) && $_GET['error'] == 1 ) :?>
    
                <div class="alert alert-danger" role="alert">
                    Mail ou Mot de passe incorrect 
                </div>
        <?php endif ?>
        
        <?php if  (isset($_GET['error']) && $_GET['error'] == 2 ) :?>
        
            <div class="alert alert-danger" role="alert">
                veuillez vous connecter 
            </div>
        <?php endif ?>
  
        <button type="submit" class="btn btn-primary">Submit</button>
        
        
        </form>
            <?php if  (isset($_GET['error']) && $_GET['error'] == 0 ) :?>
            
                <div class="alert alert-success" role="alert">
                    Deconexion reussi 
                </div>
            <?php endif ?>
    </div>