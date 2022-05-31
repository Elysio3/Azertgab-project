
<div class="" style="margin-top: 10px">

    <div class="columns">

        <div class="medium-12 column text-center">
            <div class="grid-container">
                <div class="grid-x">
                    <div class="cell small-8 large-offset-2 text-center">
                        <!-- titre -->
                        <h3><b><u>Page de connexion</u></b></h3>
                    </div>
                </div>

                <form action="./php/connexion.php" method="post" style="border: solid black 1px">

                    <br>
                    <img src="./images/login_username_icon.png" style="height: 70px">
                    <br>
                    <br>

                    <div class="grid-x">
                        <div class="cell small-4 large-offset-4">
                            <table>
                                <tr>
                                    <td>
                                        <img src="./images/login_profile_icon.png" style="height: 50px">
                                    </td>
                                    <td>
                                        <input type="text" name="username" id="username" style="height: 50px" placeholder="Nom d'utilisateur" required/></input>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                    <div class="grid-x">
                        <div class="cell small-4 large-offset-4">
                            <table>
                                <tr>
                                    <td>
                                        <img src="./images/login_password_icon.png" style="height: 50px">
                                    </td>
                                    <td>
                                        <input type="password" name="password" id="password" style="height: 50px" placeholder="Mot de passe" required/></input>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <br>

                    <div class="grid-x">
                        <div class="cell small-2 large-offset-4 text-center">
                            <button class="button secondary hollow large-offset-4" type="submit">Connexion</button>
                        </div>

                        <div class="cell small-2 text-center">
                            <button class="button secondary hollow large-offset-4" onclick="">Retour</button>
                        </div>
                    </div>

                    <div class="grid-x">
                        <div class="cell small-12 text-center">
                            <a class="warning" href="">Mot de passe oublié</a>
                            <br><br>
                            <a class="warning" href="">Besoin d'aide ?</a>
                        </div>
                    </div>
                    <br>



                </form>

            </div>
        </div>
    </div>
</div>