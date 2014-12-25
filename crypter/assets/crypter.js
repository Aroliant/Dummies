/* 
* @Author: JacobSamro
* @Date:   2014-10-06 17:05:53
* @Last Modified by:   JacobSamro
* @Last Modified time: 2014-12-25 16:33:00
*/

function crypt (algo) {
var data=cryForm.elements["toCrpyt"].value;
$.ajax({
url: 'crypter.php',type: 'POST',
data: {data: data,algo: algo},
success: function(msg) {
if(msg=='e')
alert('Data error');
else
cryForm.elements["cryptedData"].value = msg;
},
error: function(msg) {alert('Internet Connection Error');}
});
}