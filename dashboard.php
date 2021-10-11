<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/258d6cdc2a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/admin-style.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="icon" href="assets/img/favicon.png">
    <title>Admin Panel | Menu</title>
</head>
<body>
    
    <?php include('navbar.php'); ?>

    <?php

        include 'autoload.php';

        $errors = [];

        // if(($_SESSION['is_logged_in'])){
        //     die("You are not allowed to view this page!");
        // }

        $c = new Companies;
        $companies = $c->all();

        if(isset($_POST['add_company_btn'])){
            $image = $_FILES['image']['name'];
            $name = $_POST['company'];
            $country = $_POST['country'];
            $category = $_POST['category'];
            $description = $_POST['description'];
            
            if(!empty($image) && !empty($name) && !empty($category) && !empty($description)){

                move_uploaded_file($_FILES['image']['tmp_name'], "./images/companies/" .$_FILES['image']['name']);
                
                if($c->create(['image'=>$image, 'name'=>$name, 'country'=>$country ,'category'=>$category, 'description'=>$description])){
                    header("Location: adminpanel");
                }
                else{
                    $errors[] = "Product wasn't added.";
                }
            }
            else{
                $errors[] = "All fields are required.";
            }
        }

        if(isset($_GET['action']) && ($_GET['action']) == 'edit'){
            if(isset($_GET['company_id']) && (is_numeric($_GET['company_id']))){
                $_SESSION['company_id'] = $_GET['company_id'];
                header("Location: edit-product");
            }
            else{
                $errors[] = "Product doesn't exist";
            }
        }
        
        if(isset($_GET['action']) && ($_GET['action']) == 'delete'){
            if(isset($_GET['company_id']) && (is_numeric($_GET['company_id']))){
                if($c->delete($_GET['company_id'])){
                    header("Location: adminpanel");
                    echo $_GET['company_id'];
                }
                else{
                    $errors[] = "Something went wrong with id: " . $_GET['company_id'];
                }
            }
            else{
                $errors[] = "Product doesn't exist";
            }
        }

        // News on Dashboard 

        $n = new News;
        $news = $n->all();

        if(isset($_POST['add_blog_btn'])){
            $image = $_FILES['image']['name'];
            $title = $_POST['blog_title'];
            $category = $_POST['category'];
            $description = $_POST['description'];
            $date = date('Y-m-d');

            move_uploaded_file($_FILES['image']['tmp_name'], "./images/news/" .$_FILES['image']['name']);
            
            if(!empty($image) && !empty($title) && !empty($category)){
                if($n->create(['image'=>$image, 'title'=>$title, 'category'=>$category, 'description'=>$description, 'created_at'=>$date])){
                    header("Location: adminpanel-news");
                }
                else{
                    $errors[] = "Product wasn't added.";
                }
            }
            else{
                $errors[] = "image , title and category are required to add a blog";
            }
        }
        else{
            // $errors[] = "Produyct wasn't added.";
        }


        if(isset($_GET['action']) && ($_GET['action']) == 'delete'){
            if(isset($_GET['blog_id']) && (is_numeric($_GET['blog_id']))){
                if($n->delete($_GET['blog_id'])){
                    header("Location: adminpanel-news");
                    echo $_GET['blog_id'];
                }
                else{
                    $errors[] = "Something went wrong with id: " . $_GET['product_id'];
                }
            }
            else{
                $errors[] = "Product doesn't exist";
            }
        }

        // Products on Dashboard
        $p = new Products;
        $products = $p->all();

        if(isset($_POST['add_product_btn'])){
            $name = $_POST['name'];
            $image = $_FILES['image']['name'];
            $description = $_POST['description'];
            $manufacturer = $_POST['manufacturer'];
            $manufacturer_link = $_POST['manufacturer_link'];

            move_uploaded_file($_FILES['image']['tmp_name'], "./images/products/" .$_FILES['image']['name']);
            
            if($p->create(['name'=>$name, 'image'=>$image, 'description'=>$description, 'manufacturer'=>$manufacturer, 'manufacturer_link'=>$manufacturer_link])){
                header("Location: adminpanel-products");
            }
            else{
                $errors[] = "Product wasn't added.";
            }
        }
        else{
            // $errors[] = "Produyct wasn't added.";
        }

        // Categories on Dashboard
        $cat = new Categories;
        $categories = $cat->all();

        // Subategories on Dashboard
        $subc = new Subcategories;
        $subcategories = $subc->all();
        
        if(isset($_GET['action']) && ($_GET['action']) == 'delete'){
            if(isset($_GET['product_id']) && (is_numeric($_GET['product_id']))){
                if($p->delete($_GET['product_id'])){
                    header("Location: adminpanel-products");
                    echo $_GET['product_id'];
                }
                else{
                    $errors[] = "Something went wrong with id: " . $_GET['product_id'];
                }
            }
            else{
                $errors[] = "Product doesn't exist";
            }
        }
    ?>

    <div id="dashboard">
        <nav class="dashboard-nav">
            <div class="navbar-container">
                <div class="buttons-container">
                    <button id="companiesBtn">Companies</button>
                    <button id="newsBtn">News ( Blog )</button>
                    <button id="productsBtn">Products</button>
                </div>
            </div>
        </nav>
        <div class="dashboard-content">
            <!-- Companies -->
            <div id="companies">
                <div class="dashboard-header">
                    <h1 class="lead-text">Companies</h1>
                    <button id="companies-btn">Add Company</button>
                </div>
                <!-- =================================================== -->
                <div id="companies-form">
                    <div class="row-form">
                        <div class="form">
                            <h1 class="lead-text">ADD Company</h1>
                            <form method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="image">Company Image</label>
                                    <input type="file" name="image" id="image">
                                </div>
                                <div class="form-group">
                                    <label for="country">Company Name</label>
                                    <input type="text" name="company" id="description"></input>
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" name="country" id="description"></input>
                                </div>
                                <div class="form-group">
                                    <label for="paragraph">Category</label>
                                    <input type="text" name="category" id="paragraph"></input>
                                </div>
                                <div class="form-group">
                                    <label for="paragraph">Description</label>
                                    <textarea type="text" name="description" id="paragraph"></textarea>
                                </div>
                                <button type="submit" name="add_company_btn">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- =================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Company Image</th>
                                    <th>Company Name</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                                <?php foreach($companies as $company): ?>
                                    <tr>
                                        <td><?= $company['id'] ?></td>
                                        <td><?= $company['company_image'] ?></td>
                                        <td><?= $company['company_name'] ?></td>
                                        <td><?= $company['category'] ?></td>
                                        <td><?= $company['description'] ?></td>
                                        <td>
                                            <a href="?action=edit&company_id=<?= $company['id'] ?>" class="edit btn btn-sm btn-primary">Edit</a>
                                            <a href="?action=delete&company_id=<?= $company['id'] ?>" class="delete btn btn-sm btn-danger" onclick="return confirm('Are you sure?')" >Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News -->
            <div id="news">
                <div class="dashboard-header">
                    <h1 class="lead-text">News</h1>
                    <button id="news-btn">Add Blog</button>
                </div>
                <!-- =================================================== -->
                <div id="news-form">
                    <div class="row-form">
                        <div class="form">
                            <!-- Create Product -->
                            <h2>ADD product</h2>
                            <form method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="image">Blog Image ( must be square ) </label>
                                <br>
                                <input type="file" name="image" id="image">
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <br>
                                <input type="text" name="blog_title" id="title"></input>
                            </div>
                            <div class="form-group">
                                <label for="title">Category</label>
                                <br>
                                <input type="text" name="category" id="category"></input>
                            </div>
                            <div class="form-group">
                                <label for="paragraph">Description <br>
                                ( use &#60;strong&#62; {your text} &#60;/strong&#62; <strong> to make your text bolder like this. </strong>) <br>
                                <pre><strong> to make your text bolder like this. </strong></pre>
                                </label><br>
                                <textarea type="text" name="description" id="paragraph"></textarea>
                            </div>
                            <button type="submit" name="add_blog_btn">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- =================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Blog Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Created At</th>
                                    <th></th>
                                </tr>
                                <!-- for each -->
                                <?php foreach($news as $blog): ?>
                                    <tr>
                                        <td><?= $blog['id'] ?></td>
                                        <td><?= $blog['blog_photo'] ?></td>
                                        <td><?= $blog['title'] ?></td>
                                        <td><?= $blog['category'] ?></td>
                                        <td> <abbr title="<?= $blog['description'] ?>"> <?= substr($blog['description'],0 , 100) . "..." ?> </abbr></td>
                                        <td><?= $blog['created_at'] ?></td>
                                        <td>
                                            <a href="?action=edit&blog_id=<?= $blog['id'] ?>" class="edit btn btn-sm btn-primary">Edit</a>
                                            <a href="?action=delete&blog_id=<?= $blog['id'] ?>" class="delete btn btn-sm btn-danger" onclick="return confirm('Are you sure?')" >Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categories -->
            <div id="news">
                <div class="dashboard-header">
                    <h1 class="lead-text">Categories</h1>
                    <button id="news-btn">Add Category</button>
                </div>
                <!-- =================================================== -->
                <div id="news-form">
                    <div class="row-form">
                        <div class="form">
                            <!-- Create Product -->
                            <h2>ADD Category</h2>
                            <form method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="image">Category Name </label>
                                <br>
                                <input type="file" name="image" id="image">
                            </div>
                            <div class="form-group">
                                <label for="title">Category</label>
                                <br>
                                <input type="text" name="blog_title" id="title"></input>
                            </div>
                            <div class="form-group">
                                <label for="title">Category_short</label>
                                <br>
                                <input type="text" name="category" id="category"></input>
                            </div>
                            <div class="form-group">
                                <label for="paragraph">Description <br>
                                ( use &#60;strong&#62; {your text} &#60;/strong&#62; <strong> to make your text bolder like this. </strong>) <br>
                                <pre><strong> to make your text bolder like this. </strong></pre>
                                </label><br>
                                <textarea type="text" name="description" id="paragraph"></textarea>
                            </div>
                            <button type="submit" name="add_blog_btn">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- =================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Category</th>
                                    <th>Category_short</th>
                                    <th></th>
                                </tr>
                                <!-- for each -->
                                <?php foreach($categories as $cat): ?>
                                    <tr>
                                        <td><?= $cat['id'] ?></td>
                                        <td><?= $cat['name'] ?></td>
                                        <td><?= $cat['category'] ?></td>
                                        <td><?= $cat['category_short'] ?></td>
                                        <td>
                                            <a href="?action=edit&cat_id=<?= $cat['id'] ?>" class="edit btn btn-sm btn-primary">Edit</a>
                                            <a href="?action=delete&cat_id=<?= $cat['id'] ?>" class="delete btn btn-sm btn-danger" onclick="return confirm('Are you sure?')" >Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Subcategories -->
            <div id="subcategories">
                <div class="dashboard-header">
                    <h1 class="lead-text">Subcategories</h1>
                    <button id="news-btn">Add Subcategory</button>
                </div>
                <!-- =================================================== -->
                <div id="news-form">
                    <div class="row-form">
                        <div class="form">
                            <!-- Create Product -->
                            <h2>ADD Subcategory</h2>
                            <form method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="image">Subcategory Name </label>
                                <br>
                                <input type="file" name="image" id="image">
                            </div>
                            <div class="form-group">
                                <label for="title">Category</label>
                                <br>
                                <input type="text" name="blog_title" id="title"></input>
                            </div>
                            <div class="form-group">
                                <label for="title">Category_short</label>
                                <br>
                                <input type="text" name="category" id="category"></input>
                            </div>
                            <div class="form-group">
                                <label for="paragraph">Description <br>
                                ( use &#60;strong&#62; {your text} &#60;/strong&#62; <strong> to make your text bolder like this. </strong>) <br>
                                <pre><strong> to make your text bolder like this. </strong></pre>
                                </label><br>
                                <textarea type="text" name="description" id="paragraph"></textarea>
                            </div>
                            <button type="submit" name="add_blog_btn">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- =================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Category</th>
                                    <th>Category_short</th>
                                    <th></th>
                                </tr>
                                <!-- for each -->
                                <?php foreach($subcategories as $subc): ?>
                                    <tr>
                                        <td><?= $subc['id'] ?></td>
                                        <td><?= $subc['name'] ?></td>
                                        <td><?= $subc['category'] ?></td>
                                        <td><?= $subc['category_short'] ?></td>
                                        <td>
                                            <a href="?action=edit&subcat_id=<?= $subc['id'] ?>" class="edit btn btn-sm btn-primary">Edit</a>
                                            <a href="?action=delete&subcat_id=<?= $subc['id'] ?>" class="delete btn btn-sm btn-danger" onclick="return confirm('Are you sure?')" >Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products -->
            <div id="products">
                <div class="dashboard-header">
                    <h1 class="lead-text">Products</h1>
                    <button id="products-btn">Add product</button>
                </div>
                <!-- =================================================== -->
                <div id="products-form">
                <div class="row-form">
                    <div class="form">
                        <!-- Create Product -->
                        <h2>ADD product</h2>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="country">Product Name</label>
                                <input type="text" name="name" id="description"></input>
                            </div>
                            <div class="form-group">
                                <label for="image">Product Image</label>
                                <input type="file" name="image" id="image">
                            </div>
                            <div class="form-group">
                                <label for="paragraph">Description</label>
                                <textarea type="text" name="description" id="paragraph"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="paragraph">Manufacturer</label>
                                <input type="text" name="manufacturer" id="paragraph"></input>
                            </div>
                            <div class="form-group">
                                <label for="paragraph">Manufacturer Link</label>
                                <input type="text" name="manufacturer_link" id="paragraph"></input>
                            </div>
                            <button type="submit" name="add_product_btn">Add</button>
                        </form>
                    </div>
                </div>
                </div>
                <!-- =================================================== -->
                <div class="row">
                    <!-- Create Product -->
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Product Name</th>
                                    <th>Product Image</th>
                                    <th>Description</th>
                                    <th>Manufacturer</th>
                                    <!-- <th>Manufacturer link</th> -->
                                    <th></th>
                                </tr>
                                <!-- for each -->
                                <?php foreach($products as $product): ?>
                                    <tr>
                                        <td><?= $product['id'] ?></td>
                                        <td><?= $product['name'] ?></td>
                                        <td><?= $product['image'] ?></td>
                                        <td><?= substr($product['description'], 0, 50) . " ..." ?></td>
                                        <td><?= $product['manufacturer'] ?></td>
                                        <!-- <td><?= $product['manufacturer_link'] ?></td> -->
                                        <td>
                                            <a href="?action=edit&product_id=<?= $product['id'] ?>" class="edit btn btn-sm btn-primary">Edit</a>
                                            <a href="?action=delete&product_id=<?= $product['id'] ?>" class="delete btn btn-sm btn-danger" onclick="return confirm('Are you sure?')" >Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/dashboard.js"></script>

</body>
</html>