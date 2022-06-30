Liste des plats contenant l'ingrédient suivant :  
 
<INPUT name= bt_ingredient TYPE="submit" value = "ok">
</FORM><BR>
<FORM METHOD=POST ACTION="liste_plats.php">
Liste des plats contenant le mot suivant :
<INPUT TYPE="text" NAME="zt_mot">
<INPUT name = bt_mot TYPE="submit" value = "ok">
</FORM>
<BR><BR>
<FORM METHOD=POST ACTION="liste_plats.php">
Liste des plats par fourchette de prix, par origine et par origine de plat
<BR>
Choisir prix mini <INPUT TYPE="text" NAME="zt_prix_mini"><BR>
Prix maxi <INPUT TYPE="text" NAME="zt_prix_maxi"><BR>
Origine
 
<INPUT name = bt_fourchette TYPE="submit" value = "ok">
</FORM>
<FORM METHOD=POST ACTION="visu_panier.php">
<INPUT name = bt_valid TYPE="submit" value = "Visualiser le panier">
</FORM>