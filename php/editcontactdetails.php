<?php
    include("conn.php");

    $selectCustomer = '2';

    // Customer Info and Validation
    $company_contact = mysqli_real_escape_string($con, $_POST['company_contact']);
    $personal_contact = mysqli_real_escape_string($con, $_POST['personal_contact']);

    // MySQL Queries
    $check_company_contact = "SELECT * FROM customer WHERE Company_Contact = '$company_contact';";
    $check_personal_contact = "SELECT * FROM customer WHERE Personal_Contact = '$personal_contact';";

    $validate_company_contact = mysqli_query($con, $check_company_contact);
    $validate_personal_contact = mysqli_query($con, $check_personal_contact);

    $updateQuery = "UPDATE customer SET Company_Contact = '$company_contact', Personal_Contact = '$personal_contact' WHERE Customer_ID = '$selectCustomer'";

    if(mysqli_num_rows($validate_company_contact) == 0)
    {
        if(mysqli_num_rows($validate_personal_contact) == 0)
        {
            if(mysqli_query($con, $updateQuery))
            {
                echo
                '<script>
                alert("Contact details changed successfully. If you wish to change username/password, please kindly proceed to Log In page.");
                window.location.href = "customerprofile.php";
                </script>';
            }
            else
            {
                echo
                '<script>
                alert("Failed to change contact details. Please try again.");
                window.location.href = "customerprofile.php";
                </script>';
            }
        }
        else
        {
            echo
            '<script>
            alert("Someone has registered an account with this contact number. Please provide a different contact number.");
            window.location.href = "customerprofile.php";
            </script>';
        }
    }
    else
    {
        echo
        '<script>
        alert("Someone has registered an account with this contact number. Please provide a different contact number.");
        window.location.href = "customerprofile.php";
        </script>';
    }

    mysqli_close($con);
?>