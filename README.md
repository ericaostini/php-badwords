# Php Badwords
File php + html contenente un form che chiede all'utente di inserire un paragrafo e una parola da censurare 

* file index.php permette di inserire i dati, attraverso un form, e invia richiesta al server 

* file word.php riceve richiesta del server e:
    - stampa paragrafo e la sua lunghezza
    - ristampa paragrafo e lunghezza dopo aver sostituito la parola da censurare, indicata dall'utente, con 3 asterischi (**+)
    - stampa lunghezza array in numero di parole contenute 