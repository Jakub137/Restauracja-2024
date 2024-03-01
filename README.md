# I. Sklonowanie projektu

1. Otwórz basha tam gdzie chcesz miec projekt
2. Wklej w basha: `git clone https://github.com/Jakub137/system-zrr.git`
3. Wpisz `cd system-zrr`

# II. Aktualizacja naszego brancha o najnoweszego maina

ROBIĆ ZAWSZE przed rozpoczeciem pracy na tym branchu¹ i po zakończeniu pracy na tym branchu²

¹(przed wprowadzeniem jakichkolwiek zmian na nowo utworzonym branchu) ²(po naszym ostatnim commicie, ale przed stworzeniem pull requesta)

1. `git checkout main`
2. `git pull`
3. `git checkout nazwabrancha` (dawidb, jakubj, jakubd, main)
4. `git merge main` (wkleja wszystkie zmiany z maina na Twojego brancha)
5. tutaj mogą, (ale nie muszą), pojawić się konflikty, należy je wtedy rozwiązać*, zacommitować zmiany i wypushować (patrz III.) *https://code.visualstudio.com/docs/sourcecontrol/overview#_merge-conflicts
