# Elan Formation Exercice

## POO Livre

### What I learned:

#### php file linking in index
    - include("file.php");

#### Aggregation
    One of OOP patterns for relating classes(or objects) together. 

    Aggregation is typically used for hierarchy/parent/child relationships.

    In the exercise, we are relating "Livre" and "Auteur".

    - An "Livre" object exists
    - An "Livre" is owned by an "Auteur"
    - You could say that "Auteur" Aggregates 0-N "Livre"s.

    So to model this, "Auteur" would typically have an internal livres[] array.

    Conversely, the "Livre" could store the "Auteur" Object internally. This essentially matches the relationship between the two classes as Many >-< Many.