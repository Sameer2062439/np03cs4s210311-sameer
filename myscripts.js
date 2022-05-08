// Initialize Firestore through Firebase
var firebaseConfig = {
apiKey: "AIzaSyCMe8jg-0_cr_mbSB0UlyLmgQHOv_txncY",
authDomain: "imperial-tiger-349204.firebaseapp.com",
projectId: "imperial-tiger-349204",
storageBucket: "imperial-tiger-349204.appspot.com",
messagingSenderId: "618416289433",
appId: "1:618416289433:web:efafa8640801542bc96a08",
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
var db = firebase.firestore();

// Get a live data snapshot (i.e. auto-refresh) of our Reviews collection
db.collection("Reviews").onSnapshot((querySnapshot) => {
    // Empty HTML table
    $('#reviewList').empty();
    // Loop through snapshot data and add to HTML table
    querySnapshot.forEach((doc) => {
    $('#reviewList').append('<tr>');
    $('#reviewList').append('<td>' + doc.data().book_name + '</td>');
    $('#reviewList').append('<td>' + doc.data().book_rating + '/5</td>');
    $('#reviewList').append('</tr>');
    });
    // Display review count
    $('#mainTitle').html(querySnapshot.size + " book reviews in the list");
    });
    // Add button pressed
$("#addButton").click(function() {
    // Add review to Firestore collection
    db.collection("Reviews").add({
    book_name: $("#bookName").val(),
    book_rating: parseInt($("#bookRating").val())
    })
    .then((docRef) => {
    console.log("Document written with ID: ", docRef.id);
    })
    .catch((error) => {
    console.error("Error adding document: ", error);
    });
    // Reset form
    $("#bookName").val('');
    $("#bookRating").val('1');
    });