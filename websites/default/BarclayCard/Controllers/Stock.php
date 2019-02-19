<?php
namespace BarclayCard\Controllers;

class Stock {
    private $stockList;

    public function __construct($stockList){
        $this->stockList=$stockList;
    }

    public function home(){

        return ['template' => 'index.html.php',
                'title' => 'Shop - Our Cars',
                'variables' => [
                    ]
                ];
    }

    public function list(){

        if (isset($_GET['car'])){
            $cars = $this->carList->find('manufacturerId', $_GET['car']);
        }
        else {
            $cars = $this->carList->findAll();
        }

        return ['template' => 'cars.html.php',
                'title' => 'Shop - Our Cars',
                'variables' => [
                    'cars' => $cars,
                    ]
                ];
    }

    public function contact(){

        return ['template' => 'contact.html.php',
                'title' => 'Shop - Contact',
                'variables' => [

                ]
            ];
    }

    public function about(){

        return ['template' => 'about.html.php',
                'title' => 'Shop - About',
                'variables' => [

                ]
            ];
    }

    public function careers(){

        return ['template' => 'careers.html.php',
                'title' => 'Shop - Careers',
                'variables' => [

                ]
            ];
    }

    public function admin(){

        return ['template' => 'admin.html.php',
                'title' => 'Shop - Admin',
                'variables' => [

                ]
            ];
    }

    public function editForm(){
        if (isset($_GET['id'])) {
            $result = $this->carList->find('id', $_GET['id']);
            $cars = $result[0];
        }
        else {
            $cars = false;
        }

        $manus = $this->manuList->findAll();

        return [
            'template' => 'editcar.html.php',
            'title' => 'Shop - Admin',
            'variables' => [
                'cars' => $cars,
                'manus' => $manus
            ],

         ];

    }

    public function editSubmit(){
        //edit/add a car based on $_GET['id']
        $car = $_POST['cars'];

        if (!isset($_GET['id'])) {
            $car['userId'] = $_SESSION['loggedin'];
        }
        if (!empty($_FILES['filesToUpload']['name'][0])){
            $total = count($_FILES['filesToUpload']['name']);
            $target_dir = "images/cars/";
            for ($i = 0; $i<$total; $i++){
                $target_file = $target_dir . basename($_FILES["filesToUpload"]["name"][$i]);
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                // Check if image file is a actual image or fake image
                if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["filesToUpload"]["tmp_name"][$i]);
                    if($check == false) {
                        exit("File is not an image.");
                    }
                }

                // Check if file already exists
                if (file_exists($target_file)) {
                    exit("Sorry, file already exists.");
                }
                // Check file size
                if ($_FILES["filesToUpload"]["size"][$i] > 50000000) {
                    exit("Sorry, your file is too large.");
                }
                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                    exit("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
                }
                if (move_uploaded_file($_FILES["filesToUpload"]["tmp_name"][$i], $target_file)) {
                    $car['image']  = $car['image']  . $target_file . ',';
                } else {
                    exit("Sorry, there was an error uploading your file.");
                }
            }
        }
        $this->carList->save($car);

        header('location: /admin/cars');
    }

    public function adminlist(){
        //display all cars in the admin list
        $cars = $this->carList->findAll();

        return ['template' => 'admincars.html.php',
                'title' => 'Shop - Admin',
                'variables' => [
                    'cars' => $cars
                ]
            ];
    }

    public function archivedlist(){
        //display archived cars
        $cars = $this->carList->findAll();

        return ['template' => 'archivedcars.html.php',
                'title' => 'Shop - Admin',
                'variables' => [
                    'cars' => $cars
                ]
            ];
    }

    public function delete(){
        //delete a car
        $this->carList->delete($_POST['id']);
        $cars = $this->carList->findAll();

        return ['template' => 'admincars.html.php',
                'title' => 'Shop - Admin',
                'variables' => [
                    'cars' => $cars
                ]
            ];
    }

    public function deletearchived(){
        //delete an archived car
        $this->carList->delete($_POST['id']);
        $cars = $this->carList->findAll();

        return ['template' => 'archivedcars.html.php',
                'title' => 'Shop - Admin',
                'variables' => [
                    'cars' => $cars
                ]
            ];
    }

    public function archive(){
        //archive a car
        $car = $_POST['cars'];
        $car['archived'] = '1';
        $this->carList->update($car);

        return ['template' => 'archive.html.php',
                'title' => 'Shop - Admin',
                'variables' => [

                ]
            ];
    }

    public function unarchive(){
        //uncarchive a car
        $car = $_POST['cars'];
        $car['archived'] = '0';
        $this->carList->update($car);

        return ['template' => 'unarchive.html.php',
                'title' => 'Shop - Admin',
                'variables' => [

                ]
            ];
    }

}
