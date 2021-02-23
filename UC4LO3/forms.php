<?php 
    // Get & Post

// if(isset($_GET['submit'])){
//     echo $_GET['email'];
//     echo $_GET['title'];
//     echo $_GET['ingredients'];
// } 
// if(isset($_POST['submit'])){
//     echo $_POST['email'];
//     echo $_POST['title'];
//     echo $_POST['ingredients'];
// }

    // XSS Attacks //
if(isset($_POST['submit'])){
    echo htmlspecialchars($_POST['email']);
    echo htmlspecialchars($_POST['title']);
    echo htmlspecialchars($_POST['ingredients']);

    // check email //
if(isset($_POST['submit'])){
    if(empty($_POST['email'])){
        echo 'An email is required <br />';
    }   else {
        echo htmlspecialchars($_POST['email']) . '<br />';
    }

    // check title //
    if(empty($_POST['title'])){
        echo 'A title is required <br />';
    }   else {
        echo htmlspecialchars($_POST['title']) . '<br />';
    }
        // check email //
        if(empty($_POST['ingredients'])){
            echo 'At least one ingredients is required <br />';
        }   else {
            echo htmlspecialchars($_POST['ingredients']);
        }
    } 
    
}// end of th post check //

    // Filters & More Validation //

// if(isset($_POST['submit'])){
//     if(empty($_POST['email'])){
//         echo 'An email is required <br />';
//     }   else {
//         $email = $_POST['email'];
//         if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//             echo 'email must be a valid email address';
//         }
//     }
//         if(empty($_POST['title'])){
//         echo 'A title is required <br />';
//     }   else {
//         $title = $_POST['title'];
//         if(!preg_match('/^[a-zA-Z\]+$/', $title)){
//             echo 'Title must be letters and spaces only';
//         }
//     }
//         if(empty($_POST['ingredients'])){
//             echo 'At least one ingredients is required <br />';
//         }   else {
//             $ingredients = $_POST['ingredients'];
//             if(!preg_match('/^[a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
//                 echo 'Ingredients must be a comma separeted list';
//             }
//     }

// }
    

?>

<!DOCTYPE html>
<html>
	
	<?php include('UC4L03 Templates/UC4L03 Header.php '); ?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form action="" class="white" action="UC4L03 Forms  in PHP.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email">
        <label>Pizza Title:</label>
        <input type="text" name="title">
        <label>Ingredients (Comma separated):</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

	<?php include('UC4L03 Templates/UC4L03 Footer.php'); ?>

</html>