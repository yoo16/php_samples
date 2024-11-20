const editor = document.querySelector('#editor');
const settings = {
    height: '400px'
};
ClassicEditor
    .create(editor, settings)
    .then(editor => {
        console.log('Editor is ready', editor);
    })
    .catch(error => {
        console.error('There was a problem initializing the editor:', error);
    });