function idValidation(){
     var id = document.getElementById('id').value;
     if(!(id>0 && id<100)){
         document.getElementById('idErr').value = 'ID should be >0 and <100';
     }
}

function nameValidation(){
    console.log('name Function Called');
}

function ageValidation(){
    var id = document.getElementById('age').value;
    console.log(id)
    if(!(id>0 && id<100)){
        console.log('==============')
        document.getElementById('ageErr').innerHTML = "Age should be >0 and <100";
    }else{
        document.getElementById('ageErr').innerHTML = "";
    }
}

function contactValidation(){
    console.log('contact Function Called');
}