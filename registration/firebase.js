const firebaseConfig = {
    apiKey: "AIzaSyCk816bJzpSSg2f3UsAmf62OpGQCviHlzY",
    authDomain: "registration-a8bec.firebaseapp.com",
    databaseURL: "https://registration-a8bec-default-rtdb.firebaseio.com",
    projectId: "registration-a8bec",
    storageBucket: "registration-a8bec.appspot.com",
    messagingSenderId: "794172480383",
    appId: "1:794172480383:web:38388445b1f2982cead84a",
    measurementId: "G-D0ZHLM01R8"
  };
  firebase.initializeApp(firebaseConfig);
  


 var registrationDB = firebase.database().ref('register');
  document.getElementById('register').addEventListener("submit",submitForm);

  function submitForm(e){
    e.preventDefault();

    var name = getElementVal('name');
    var email = getElementVal('email');
    var usn = getElementVal('usn');
    var phone = getElementVal('phone');
    var reg = getElementVal('reg');
    var reg_1 = getElementVal('reg_1');


    console.log(name,email,usn,phone);

  }

  const getElementVal = (id) => {
    return document.getElementById(id).value;
  };