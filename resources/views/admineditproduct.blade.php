<html>
  <h1>Update Product</h1>
<form action="/editProduct" method="POST" onsubmit="validatesubmit(event)">
            @csrf
            <input type="hidden" name="id" value="{{$data['id']}}">
             <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label><br>
                <input id="name" type="text" name="name" class="" value="{{$data['name']}}" placeholder="Enter name of product" oninput="validateName()">
                <span id="name-message" style="color:red;"></span>
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Price</label><br>
                <input id="price" type="text" name="price" class=""  value="{{$data['price']}}" placeholder="Enter price of this product" oninput="validatePrice()">
                <span id="price-error" style="color:red;"></span>

            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">category</label><br>
                <input id="category" type="text" name="category" class=""  value="{{$data['category']}}" placeholder="Enter category of this product" oninput="validateCategory()">
                <span id="category-message" style="color:red;"></span>
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">description</label><br>
                <input id="description" type="text" name="description" class=""  value="{{$data['description']}}" placeholder="Enter a short description of this product" oninput="validateDescription()">
                <span id="description-message" style="color:red;"></span>
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">gallery</label><br>
                <input id="file" type="file" name="gallery" class=""  placeholder="upload an image" onchange="validateFile()">
                <span id="file-error" style="color:red;"></span>
            </div>



            
 
            <br><button type="submit" class="btn btn-primary">Update</button><br>
            <a href="/admindeleteproduct"> Go Back to products list page</a><br>

        </form>

        <!--<script>

window.formvalid={name:false,price:false,category:false,description:false};

function validatesubmit(event){
    if(!formvalid.name || !formvalid.price || !formvalid.category || !formvalid.description  ){
      event.preventDefault();
      alert('invalid input');
    }  
}
    
    function validateName() {  
  var name = document.getElementById("name").value;
  var nameMessage = document.getElementById("name-message");
  
  if (/\d/.test(name)) {
    nameMessage.innerHTML = "Name cannot contain numbers.";
    formvalid.name=false;

  } else {
    nameMessage.innerHTML = "";
    formvalid.name=true;

  }
}


function validateCategory() {  
  var category = document.getElementById("category").value;
  var categoryMessage = document.getElementById("category-message");
  
  if (/\d/.test(category)) {
    categoryMessage.innerHTML = "Category cannot contain numbers.";
    formvalid.category=false;

  } else {
    categoryMessage.innerHTML = "";
    formvalid.category=true;

  }
}

function validateDescription() {  
  var description = document.getElementById("description").value;
  var descriptionMessage = document.getElementById("description-message");
  
  if (/\d/.test(description)) {
    descriptionMessage.innerHTML = "Description cannot contain numbers.";
    formvalid.description=false;

  } else {
    descriptionMessage.innerHTML = "";
    formvalid.description=true;

  }
}


function validatePrice() {
    var price = document.getElementById("price").value;
    var priceError = document.getElementById("price-error");

    if (isNaN(price)) {
      priceError.innerHTML = "Price must be a number.";
      formvalid.price=false;
    } else {
      priceError.innerHTML = "";
      formvalid.price=true;
    }
}

function validateFile() {
  var fileInput = document.getElementById("file").files[0];
  var fileError = document.getElementById("file-error");
  
  if (!fileInput) {
    fileError.innerHTML = "Please select a file.";
    formvalid.file = false;
  } else {
    fileError.innerHTML = "";
    formvalid.file = true;
  }
}




</script>-->
</html>