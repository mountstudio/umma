import EditorJs from '@editorjs/editorjs';
import Header from '@editorjs/header';
import List from '@editorjs/list';
import Embed from '@editorjs/embed';
import ImageTool from '@editorjs/image';
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


const editor = new EditorJs({
    holderId: 'editorjs',

    tools:{
        header:{
            class: Header,
            inlineToolbar:['link'],
            config: {
                placeholder: 'Enter a header',
                levels: [2, 3, 4],
                defaultLevel: 3
            }
        },
        Marker: {
            class: Marker,
            shortcut: 'CMD+SHIFT+M',
        },
        inlineCode: {
            class: InlineCode,
            shortcut: 'CMD+SHIFT+M',
        },
        paragraph: {
            class: Paragraph,
            inlineToolbar: true,
        },
        table: {
            class: Table,
        },
        code: CodeTool,
        raw: RawTool,
        delimiter: Delimiter,
        checklist: {
            class: Checklist,
            inlineToolbar: true,
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
        linkTool: {
            class: LinkTool,
            config: {
                endpoint: '/editorjs/link', // Your backend endpoint for url data fetching
            }
        },
        warning: {
            class: Warning,
            inlineToolbar: true,
            shortcut: 'CMD+SHIFT+W',
            config: {
                titlePlaceholder: 'Title',
                messagePlaceholder: 'Message',
            },
        },
        image: {
            class: ImageTool,
            config: {
                endpoints: {
                    byFile: '/editorjs/image/file', // Your backend file uploader endpoint
                    byUrl: '/editorjs/image/url', // Your endpoint that provides uploading by Url
                }
            }
        },
        quote: {
            class: Quote,
            inlineToolbar: true,
            shortcut: 'CMD+SHIFT+O',
            config: {
                quotePlaceholder: 'Enter a quote',
                captionPlaceholder: 'Quote\'s author',
            },
        },
    },
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
