import EditorJS from '@editorjs/editorjs';
import Header from '@editorjs/header';
import List from '@editorjs/list';
import Embed from '@editorjs/embed';

const editor = new EditorJS({
    holderId: 'editorjs',

    tools:{
        header:{
            class: Header,
            inlineToolbar:['link']
        },
        link: {
            class:  List,
            inlineToolbar: [
                'link',
                'bold'
            ]
        },
        embed: {
            class: Embed,
            inlineToolbar: false,
            config: {
                services: {
                    youtube: true,
                    coub: true
                }
            },
        },
    }
});

// let saveBtn = document.querySelector('button');
//
// saveBtn.addEventListener('click', function () {
//     editor.saver().then((outputData) => {
//         console.log('Article data: ', outputData)
//     }).catch((error) =>{
//         console.log('Saving failed: ',error)
//     });
// });
