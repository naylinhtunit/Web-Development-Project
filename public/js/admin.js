// Login Form Show or Hide Password
$("#password").password('toggle');

// Image Upload
$(document).ready(function(){
    // Basic
    $('.dropify').dropify();
});


// CKeditor
ClassicEditor
.create( document.querySelector( '#editor' ), {
	// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
})
.then( editor => {
	window.editor = editor;
})
// .catch( err => {
// 	console.error( err.stack );
// });