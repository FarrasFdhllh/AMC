<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Biodata Modal</title>
  <style>
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
      background-color: #fff;
      margin: 10% auto;
      padding: 20px;
      border-radius: 10px;
      width: 50%;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      text-align: left;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover, .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input, select {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .profile-picture {
      text-align: center;
      margin-bottom: 20px;
    }

    .profile-picture img {
      width: 120px;
      border-radius: 50%;
    }

    .profile-section {
      text-align: center;
    }

    button:disabled {
      background-color: #ccc;
      cursor: not-allowed;
    }
  </style>
</head>
<body>

  <div class="profile-section">
    <h3>Ubah Biodata Diri</h3>
    <div class="profile-picture">
        <img src="avatar.png" alt="User Avatar">
        <br>
        <button>Pilih Foto</button>
      </div>
    <p>Nama: <span id="displayName">rifa reza</span> 
      <a href="#" class="edit-btn" data-target="name">Ubah</a>
    </p>
    <p>Tanggal Lahir: <span id="displayBirthDate">-</span> 
      <a href="#" class="edit-btn" data-target="birthDate">Ubah</a>
    </p>
    <p>Jenis Kelamin: <span id="displayGender">-</span> 
      <a href="#" class="edit-btn" data-target="gender">Ubah</a>
    </p>
    <p>Email: <span id="displayEmail">rifareza.fahlevi09@gmail.com</span> 
      <a href="#" class="edit-btn" data-target="email">Ubah</a>
    </p>
    <p>Nomor HP: <span id="displayPhone">6289678633632</span> 
      <a href="#" class="edit-btn" data-target="phone">Ubah</a>
    </p>
  </div>

  <!-- Modal Dialog -->
  <div id="profileModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2 id="modalTitle">Ubah Biodata Diri</h2>
    
      <form>
        <div class="form-group" id="nameFormGroup">
          <label for="nameInput">Nama</label>
          <input type="text" id="nameInput" value="rifa reza">
        </div>

        <div class="form-group" id="birthDateFormGroup" style="display: none;">
          <label for="birthDate">Tanggal Lahir</label>
          <input type="date" id="birthDate">
        </div>

        <div class="form-group" id="genderFormGroup" style="display: none;">
          <label for="gender">Jenis Kelamin</label>
          <select id="gender">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>

        <div class="form-group" id="emailFormGroup" style="display: none;">
          <label for="emailInput">Email</label>
          <input type="email" id="emailInput" value="rifareza.fahlevi09@gmail.com">
        </div>

        <div class="form-group" id="phoneFormGroup" style="display: none;">
          <label for="phoneInput">Nomor HP</label>
          <input type="text" id="phoneInput" value="6289678633632">
        </div>

        <button id="saveProfileBtn" disabled>Simpan</button>
      </form>
    </div>
  </div>

  <script>
    var modal = document.getElementById("profileModal");
    var closeBtn = document.getElementsByClassName("close")[0];
    var saveBtn = document.getElementById("saveProfileBtn");
    var editBtns = document.querySelectorAll(".edit-btn");

    var nameFormGroup = document.getElementById("nameFormGroup");
    var birthDateFormGroup = document.getElementById("birthDateFormGroup");
    var genderFormGroup = document.getElementById("genderFormGroup");
    var emailFormGroup = document.getElementById("emailFormGroup");
    var phoneFormGroup = document.getElementById("phoneFormGroup");

    editBtns.forEach(function(btn) {
      btn.onclick = function() {
        var target = btn.getAttribute("data-target");
        modal.style.display = "block";
        resetFormGroups();

        if (target === "name") {
          nameFormGroup.style.display = "block";
        } else if (target === "birthDate") {
          birthDateFormGroup.style.display = "block";
        } else if (target === "gender") {
          genderFormGroup.style.display = "block";
        } else if (target === "email") {
          emailFormGroup.style.display = "block";
        } else if (target === "phone") {
          phoneFormGroup.style.display = "block";
        }
      };
    });

    closeBtn.onclick = function () {
      modal.style.display = "none";
    };

    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    };

    function resetFormGroups() {
      nameFormGroup.style.display = "none";
      birthDateFormGroup.style.display = "none";
      genderFormGroup.style.display = "none";
      emailFormGroup.style.display = "none";
      phoneFormGroup.style.display = "none";
    }
  </script>

</body>
</html>
