 const cards = [
   {
     front: 'The First Computer Programmer',
     back: 'Ada Lovelace',
     flipped: false,
    },
   {
     front: 'The First Computer Programmer',
     back: 'Ada Lovelace',
     flipped: false,
      },
   {
     front: 'The First Computer Programmer',
     back: 'Ada Lovelace',
     flipped: false,
      },
   {
     front: 'The First Computer Programmer',
     back: 'Ada Lovelace',
     flipped: false,
      },
 ];

// get info for new cards
// add new cards
// delete cards
// animate card flipped
// display error if form fields are blank

 new Vue({
   el: '#flashcard-app', //mounts to html element called flashcard-app
   data: {
     cards: cards, //data property called 'cards' is set to the array of card objects called 'cards'
   },
   methods: {

     toggleCard: function(){
       card.flipped = !card.flipped;
     }

   }
 });
