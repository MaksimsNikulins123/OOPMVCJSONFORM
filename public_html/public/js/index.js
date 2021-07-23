

function addProduct(){

    let inputs = document.querySelectorAll('.input');
    let inputArray = [];
    let inputValueArray = [];
    
    
    
    for (let index = 0; index < inputs.length; index++) {
        let input = inputs[index];
        
        inputArray.push(input.name);

        inputValueArray.push(document.getElementById(input.name).value);
        
    }

    

   let inputAssocArray = {};

   console.log(inputAssocArray);

   for (let index = 0; index < inputs.length; index++) {
    let key = inputArray[index];
    let value = inputValueArray[index];
    inputAssocArray[key] = value;
      
       
   }


   let request = new XMLHttpRequest();

    let url = "http://test/addproduct";
  
    
    request.open("POST", url, true);

    request.setRequestHeader("Content-Type", "application/json");
    
    request.onreadystatechange = function () {

        if(request.readyState === 4 && request.status === 200) {       
           
            // alert('ok');
            // 
          
            window.location.href = "/";
        }else{
            
            // alert('error add');
        }
        
    };


    data = JSON.stringify(inputAssocArray);
    
    request.send(data); 
   
}



function deleteChecked(){ 

    let checkboxes = document.querySelectorAll('.delete-checkbox');
    let idArray = [];

    let data;
  


    for (let i=0; i<checkboxes.length; i++) {
        if (checkboxes[i].type === "checkbox" && checkboxes[i].checked === true){
            let id = checkboxes[i].id; 
            
            idArray.push(id);
       
        }
    
    }

    // console.log(idArray);

    let request = new XMLHttpRequest();

    let url = "http://test/";
  
    
    request.open("POST", url, true);

    request.setRequestHeader("Content-Type", "application/json");
    
    request.onreadystatechange = function () {

        if(request.readyState === 4 && request.status === 200) {       
           
            // alert('ok');
            window.location = "/";
            
        }else{
            // alert('error delete');
        }
        
    };

    var jsonBody = {
        "id" : idArray 
        };

    data = JSON.stringify(jsonBody);
    
    // console.log(data);
    request.send(data); 

    
} 


function changeAction(value){
    
    var selectTable = document.getElementById("selectTable");
    if(value== 'dvd'){
        selectTable.innerHTML = "<table><tr><td><label> Size (MB) </label><input type='text' name='size' id='size' class='input'></td></tr> </table><p> Please provide size in (MB) format</p>";
    }else if(value == 'book'){
        selectTable.innerHTML = "<table ><tr><label> Weight (KG) </label> <input type='text' name='weight' id='weight' class='input'></tr></table> <p> Please provide Weight in (KG) format</p>";
    }else if(value == 'furniture'){
        selectTable.innerHTML = "<table ><tr><td><label>Height (CM)</label></td><td><input type='text' name='height' id='height' class='input'></td></tr><tr><td><label>Width (CM)</label></td><td><input type='text' name='width' id='width' class='input'></td></tr><tr><td><label>Length (CM)</label></td><td><input type='text' name='length' id='length' class='input'></td></tr></table> <p> Please provide dimensions in HxWxL format</p>";
    }else if(value == 'default'){
        selectTable.innerHTML = "";
    }
    
}        