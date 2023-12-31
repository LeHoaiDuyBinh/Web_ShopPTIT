<?php
    class Dashboard_categoryController extends Controller{
        private $access = false;

        function CheckAccess(){
            if($this->access == false){
                header('Location: /Dashboard_category');
                exit;
            }
        }

        function Show(){
            $model = $this->model("Category");
            $data['categories'] = $model->LoadCategories();
            $data["csrf_token_category"] =  bin2hex(random_bytes(50));
            $_SESSION["csrf_token_category"] =  $data["csrf_token_category"];
            $page = $this->view("dashboard_category", $data);
        }

        function ValidateData($data){

            $this->CheckAccess();

            // check thiếu data
            if($this->validateNull($data)){
                if(empty($data['csrf_token_category']))
                    return "Lỗi";
                return "Vui lòng nhập đủ thông tin";
            }

            $arr_Str["category_name"] = $data['category_name'];

            $arr_Number['category_parent_id'] = $data['category_parent_id'];
            $arr_Number['category_id'] = $data['category_id'] == null ? 0 : $data['category_id'];

            if($this->validateNumber($arr_Number)){
                //var_dump($arr_Number);
                return "Giá trị số không hợp lệ";
            }

            if($this->validateSpecialCharacter($arr_Str)){
                return "Dữ liệu không được chứa kí tự đặc biệt";
            }
            
            return 'validated';
        }

        function AddCategory(){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $this->access = true;
    
                $category_data = array(
                    "category_name" => $_POST['CategoryName'],
                    "category_parent_id" => $_POST['CategoryParentID'],
                    'csrf_token_category' => $_POST['csrf_token_category']
                );
                
                $category_data = array_map('trim', $category_data);

                $check = $this->ValidateData($category_data);
                if($check == "validated"){
                    if($category_data['csrf_token_category'] == $_SESSION['csrf_token_category'] && !empty($category_data['csrf_token_category'])){
                        $model = $this->model("Category");
                        $err = $model->InsertCategory($category_data);
                        echo $err;
                    }
                    else{
                        echo "Lỗi";
                    }
                }
                else{
                    echo $check;
                }
            }
        }

        function EditCategory(){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $this->access = true;
    
                $category_data = array(
                    "category_id" => $_POST['CategoryID'],
                    "category_name" => $_POST['CategoryName'],
                    "category_parent_id" => $_POST['CategoryParentID'],
                    'csrf_token_category' => $_POST['csrf_token_category']
                );

                $category_data = array_map('trim', $category_data);
                    
                $check = $this->ValidateData($category_data);
                if($check == "validated"){
                    if($category_data['csrf_token_category'] == $_SESSION['csrf_token_category'] && !empty($category_data['csrf_token_category'])){
                        if($category_data["category_id"] <= 4){
                            echo "Không được sửa danh mục cha";
                        }
                        else if($category_data["category_id"] > 4){
                            $model = $this->model("Category");
                            $err = $model->EditCategory($category_data);
                            echo $err;
                        }
                    }
                    else{
                        echo "Lỗi";
                    }
                }
                else{
                    echo $check;
                }
            }
        }

        function DeleteCategory(){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
                $category_data = array(
                    "category_id" => $_POST['category_id']
                );

                $check = $this->validateNumber($category_data);
                $category_data = array_map('trim', $category_data);

                $category_data['csrf_token_category'] = $_POST['csrf_token_category'];
                if(empty($category_data['csrf_token_category'])){
                    echo "Lỗi";
                    return;
                }
                if($check == false){
                    if($category_data['csrf_token_category'] == $_SESSION['csrf_token_category'] && !empty($category_data['csrf_token_category'])){
                        if($category_data["category_id"] <= 4){
                            echo "Không được xóa danh mục cha";
                        }
                        else if($category_data["category_id"] > 4){
                            $model = $this->model("Category");
                            $err = $model->DeleteCategory($category_data);
                            echo $err;
                        }
                    }
                    else{
                        echo "Lỗi";
                    }
                    }
                else{
                    echo "Lỗi";
                }
            }
        }
    }
?>