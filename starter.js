function firstDuplicate(a) {
	
var firstIndex = "";
for (var i = 1; i < a.length; i++) { //start from second elem since first is never a duplicate
        if (a.lastIndexOf(a[i])> i) {
            firstIndex = i;
            
        }
}

return firstIndex;

	/*var arr = [];
	var obj = {};
 for(var i = 0 ; i <= a.length;i++){
   for(var j = i+1; j <= a.length;j++){
    if(a[i] == a[j]){
    	arr.push(a[i],a.indexOf(a[i]));
    	

    
   }
   
   }
 }

console.log(arr);
if(arr.length <= 0){
   return -1;
}*/

}

firstDuplicate([2, 4, 3, 5, 1]);