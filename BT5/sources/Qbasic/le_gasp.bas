5 REM *---<THE GASP J&S 38>---*
10 t = 5: REM Taille 4 x 4
20 CLS: REM efface ecran
30 REM *---<affichage>---*
40 PRINT "...1.2.3.4"
50 FOR y = 2 TO t
    60 PRINT: PRINT: PRINT y - 1;
    70 FOR x = 2 TO t
        80 LOCATE y * 2, x * 2
        90 IF a(x, y) = 1 THEN PRINT "X";
        100 IF a(x, y) = 0 THEN PRINT "0";
110 NEXT x: NEXT y
120 REM *---<choix.joueur>---*
130 PRINT: PRINT: PRINT: PRINT "nombre de coups = "; nc: PRINT: PRINT
140 INPUT "Colonne = "; x: INPUT "Ligne = "; y
150 nc = nc + 1
160 x = x + 1: y = y + 1
170 FOR yt = y - 1 TO y + 1
    180 FOR xt = x - 1 TO x + 1
        190 IF xt = x AND yt = y THEN 220
        200 IF a(xt, yt) = 1 THEN a(xt, yt) = 0: GOTO 220
        210 a(xt, yt) = 1
220 NEXT xt, yt: GOTO 20

