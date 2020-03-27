import EditorJs from '@editorjs/editorjs';
import Header from '@editorjs/header';
import List from '@editorjs/list';
import Embed from '@editorjs/embed';
import SimpleImage from '@editorjs/simple-image';
import Quote from '@editorjs/quote';
import LinkTool from '@editorjs/link';
import RawTool from '@editorjs/raw';
import Delimiter from '@editorjs/delimiter';
import Checklist from '@editorjs/checklist';
import CodeTool from '@editorjs/code';
import Warning from '@editorjs/warning';
import Paragraph from '@editorjs/paragraph';
import Table from '@editorjs/table';
import InlineCode from '@editorjs/inline-code';
import Marker from '@editorjs/marker';


window.Editor = new EditorJs({
    holderId: 'editorjs',

    tools:{
        header:{
            class: Header,
            inlineToolbar:['link'],
        },
        Marker: {
            class: Marker,
            shortcut: 'CMD+SHIFT+M',
        },
        // paragraph: {
        //     class: Paragraph,
        //     inlineToolbar: true,
        // },
        // table: {
        //     class: Table,
        // },
        // delimiter: Delimiter,
        // list: {
        //     class:  List,
        //     inlineToolbar: [
        //         'link',
        //         'bold'
        //     ]
        // },
        // embed: {
        //     class: Embed,
        //     inlineToolbar: false,
        //     config: {
        //         services: {
        //             youtube: true,
        //             coub: true
        //         }
        //     },
        // },
        // link: {
        //     class: LinkTool,
        //     config: {
        //         endpoint: '/editorjs/link', // Your backend endpoint for url data fetching
        //     }
        // },
        image: {
            class: SimpleImage,
            inlineToolbar: ['link'],
        },
        quote: {
            class: Quote,
            inlineToolbar: true,
            shortcut: 'CMD+SHIFT+O',
        },
    },
});

// let saveBtn = document.querySelector('button');
//
// saveBtn.addEventListener('click', function (e) {
//     console.log(e, 'click');
//     e.preventDefault();
//     editor.save().then((outputData) => {
//         console.log('Article data: ', outputData)
//     }).catch((error) =>{
//         console.log('Saving failed: ',error)
//     });
// });
