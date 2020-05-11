Moja aplikacja internetowa to wypożyczalnia samochodów. Wykorzystuje technologie HTML, CSS, JS, SQL.
Na mojej stronie niby jest już trochę zrobione ale dużo też jest do pracy. Początkowo zrobiłem surowo system rejestracji się i logowania, aby móc potem oczywiście popracować nad wyglądem. Sam system logowania jest prostu, w momencie gdy baza nie znajdzie loginu, bądź hasło jest złe to pokazuję się błąd, bo coś jest źle wpisane i nie puści nas dalej. Oczywiście jeśli nie mamy konta, bądź po prostu chcemy założyć nowe to klikamy w zakładkę zarejestruj się i tam podajemy login, mail, hasło oraz potwierdzenie hasła. Gdy utworzymy konto automatycznie jest ono tworzone w bazie danych, którą może Pan utworzyć poprzez plik .sql (umieszczony w repozytorium). I tu oczywiście też pokazują się błędy w momencie, gdy np. dany login jest już zajęty czy hasła się nie zgadzają. Oprócz samego błędu który wyskakuje podczas logowania czy rejestracji również w adresie strony będzie pokazane, że jest dany błąd. Później zająłem się wyglądem strony, postawiłem na taką prostotę czyli zrobienie hedaera z nazwą i social mediami oraz nawigatorem. Strona główna oraz logowania i rejestracji ma w tle rozmazany obraz samochodu stojące na tle gór. Strona główna to przycisk który przekierowuje nas do strony logowania, po czym możemy się zalogować albo przejść do rejestracji. Postawiłem na formułę, że bez zalogowania się nie przejdziemy do samej strony, gdzie będziemy wyszukiwać samochodów, które chcemy wypożyczyć. Oczywiście jak można zobaczyć strona jest jeszcze w fazie robienia więc nie ma nic po zalogowaniu. Ale planuje tam umieścić inputy, bądź po prostu opcje do rozwijania jaki samochód chcemy znaleźć. Wtedy będzie przeszukiwało kolejną bazę, które będzie zawierała w sobie samochodu (marka, przebieg itd.) po czym rozwijała lista tych samochodów. W momencie wypożyczania samochodu (oczywiście pokazane będą jakiś koszt), mam zamiar zaimplementować moduł, który po wypożyczeniu samochodu będzie wystawiała nam rachunek do np. pdf.
