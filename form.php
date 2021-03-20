<form  action='thanks.php'  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="prenom">Prénom :</label>
      <input  type="text"  id="prenom"  name="user_firstName">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="phoneNumber">Tel :</label>
      <input  type="text"  id="phoneNumber"  name="user_phoneNumber">
    </div>
    <div>
      <label for="lstDestination">Votre destinantion :</label>
        <select id="lstDestination" name="lstDestination">
          <option value="Les Philippines">Les Philippines</option>
          <option value="Japon">Japon</option>
          <option value="Tahiti">Tahiti</option>
          <option value="Australie">Australie</option>
        </select>

    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>


