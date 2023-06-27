import { Notyf } from 'notyf';
import 'notyf/notyf.min.css';

const notyf = new Notyf({
    duration: 1000,
    position: {
        x:'right',
        y:'bottom'
    },
    types: [
        {
            type:'info',
            backgound: 'red',
            icon:false 
        },
        {
            type:'info',
            backgound: 'red',
            icon:false 
        }
    ]
});
let messages = document.querySelectorAll("message");
messages.forEach((message)=>{
    if(message.className == 'success'){
        notyf.success(message.innerHTML)
    }
})

