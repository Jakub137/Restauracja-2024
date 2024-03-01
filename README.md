# I. Sklonowanie projektu

1. Otwórz basha tam gdzie chcesz miec projekt
2. Wklej w basha: `git clone https://github.com/Jakub137/Restauracja-2024`
3. Wpisz `cd system-zrr`

# II. Aktualizacja naszego brancha o najnoweszego maina

ROBIĆ ZAWSZE przed rozpoczeciem pracy na tym branchu¹ i po zakończeniu pracy na tym branchu²

¹(przed wprowadzeniem jakichkolwiek zmian na nowo utworzonym branchu) ²(po naszym ostatnim commicie, ale przed stworzeniem pull requesta)

1. `git checkout main`
2. `git pull`
3. `git checkout nazwabrancha` (dawidb, jakubj, jakubd, main)
4. `git merge main` (wkleja wszystkie zmiany z maina na Twojego brancha)
5. tutaj mogą, (ale nie muszą), pojawić się konflikty, należy je wtedy rozwiązać*, zacommitować zmiany i wypushować (patrz III.) *https://code.visualstudio.com/docs/sourcecontrol/overview#_merge-conflicts

# III. Wysyłanie zmian do GitHuba

po raz pierwszy: `git push -u orgin nazwabrancha` po raz n-ty: `git push`

# IV. Tworzenie pull requesta

1. Zacommituj wszystkie swoje zmiany
2. Zaaktualizuj swojego brancha o najnowszego maina (II.) i rozwiąż ewentualne konflikty
3. Wypushuj wszystkie zmiany ze swojego brancha (III.)
4. wejdz na swojego brancha na GitHubie `https://github.com/Jakub137/Restauracja-2024`
5. Kliknij create pull request (zwróć uwagę, aby targetowanym branchem był main, a nie źródłowy Twój branch)
6. Poinformuj administratora projektu o nowo utworzonym pull requescie
