<div id="divform">
	<form action="index.php" method="post">
		<h1>Please subscribe to receive more recipes!</h1>
		<label for="name">
      <span>Name:</span>
    </label><input type="text" id="name" name="name" required size="100" maxlength="40" placeholder="Input your name!">
		<label for="email">
      <span>Email:</span>
    </label><input type="email" id="email" name="email" required size="100" maxlength="40" placeholder="INput your email">
    <fieldset>
      <legend>What is your wish!</legend>
      <label for="sweet">
        <span>Sweet</span>
      </label>
        <input type="radio" id="sweet" name="wish" value="sweet">
      <label for="salty">
        <span>Salty</span>
      </label>
        <input type="radio" id="salty" name="wish" value="salty">
    </fieldset>
    <label for="flavor">
      <span>Which flavor do you prefer:</span>
    </label>
    <select id="flavor" name="flavor">
      <option value="chocolate">Chocolate</option>
      <option value="milk">Milk cream</option>
      <option value="strawberry">Strawberry</option>
      <option value="guava">Guava paste</option>
    </select>
    <label for="description">
      <span>Description:</span>
    </label>
    <textarea id="description" name="message" cols="60" rows="5" placeholder="Please include your message here!"></textarea>
		<input type="hidden" name="send" value="ok"> <input type="submit" value="Subscribe">
	</form>
  </div>
  <div id="divcontact">Contact information:
    <ul>
      <li>Fone: 123-123 4567</li>
      <li>Address: 123 Avenue, Toronto</li>
    </ul>
    <h3>Independent production</h3>
	<div><img id="logo" src=img/logo.png alt='Logo'></div>
</div>