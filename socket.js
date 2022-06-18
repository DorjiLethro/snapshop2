const express = require('express')
const app = express()

//help to load css file
var path = require('path')
app.use(express.static(path.join(__dirname, 'public')));

//socket.io real time chat
const http = require('http').Server(app)
const io = require('socket.io')(http)

//create new connection
http.listen(8080, () => console.log("http running : port : 8080"));

io.on('connection', socket =>{
  console.log('A user connected w id '+socket.id)
  
  socket.on('disconnect', ()=>{
      console.log('A user disconnected');
  });
  socket.on('message',msg =>{
    console.log("message: "+msg)
    socket.broadcast.emit('server',msg);
})

})

app.get('/', (req, res) => {
    res.sendFile(__dirname + '/chat.html');
  })