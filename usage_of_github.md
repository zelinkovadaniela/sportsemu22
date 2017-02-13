---- Git colaboration steps -----
-- disclaimer I might have missed something ---
--- all colaborators need to follow this set of rules ---
--- only edit your files---
--- no file should have two editors, this will break my system and require extra stepps ---

1# create a clone of the project from bit bucket
git clone https://bugeyemonster@bitbucket.org/bugeyemonster/officant.git
2# create a new branch on your local system to work in
git checkout -b <your name> 
3# add changed files to the local repo
git add (. or * or file name) 
4# commit your changes to the local report
git commit -m '<include a meaningful description of your change>'
5# push your branch to bit bucket
git push origin <your branch name>
6# log into bitbucket go to project your branch and submit a pull request
7# merge the branches
8# approve merge

9# on your local machine pull down the latest master
git pull
10# change to your branch 
git checkout <your name>

11#edit your code repeat steps when you are ready.