<?php
include "header.php";
?>
The second part of character creation is to choose what gender you would like to be. The picture displays examples of what the races would look like as that gender.
<figure>
<figcaption>Races</figcaption>
<?php 
$img1 = "images/Races.jpg";
$Url1 = "http://www.wikipedia.org";

$img2 = "images/RoDragonCover.jpg";
$Url2 = "http://www.youtube.com";

$img3 = "images/redguy.jpg";
$Url3 = "http://www.google.com";

$num=rand(1,3);
$image=${'img' .$num};
$URL=${'Url' .$num};

print"<a href=$URL><img src=$image border=0></a><br>";
?>
<img src="images/Races.jpg" alt="Races" height="260" width="746">
<img src="images/redguy.jpg" alt="Races" height="260" width="380">
<img src="images/RoDragonCover.jpg" alt="Races" height="260" width="200">
</figure>
You may choose the gender at any point. The gender does not affect the ability scores or anything. The images just display an example of what your character could look like.
<p>In this part of the character creation process, you must look at the races. Looking at the races you can either decide you want to be said race no matter what. Even if the race does not necessarily help with any main stats that you will use in the game. Any race is able to be picked.
The table below shows how the races will affect ability scores.</p>
<table>
<tr>
<th>Race</th><th>Ability Adjustments</th><th>Favored Class</th>
</tr>
<tr>
<td><a href="#Human">Human</a></td> <td> None</td><td>Any</td>
</tr>
<tr>
<td><a href="#Dwarf">Dwarf</a></td> <td> +2 Constitution (Con) -2 Charisma (Cha)</td><td>Fighter</td>
</tr>
<tr>
<td><a href="#Elf">Elf</a></td> <td>+2 Dexterity(Dex) -2 Constitution(Con)</td><td>Wizard</td>
</tr>
<tr>
<td><a href="#Gnome">Gnome</a></td> <td>+2 Constitution(Con) -2 Strength (Str)</td><td>Bard</td>
</tr>
<tr>
<td><a href="#Half-Elf">Half-Elf</a></td> <td>None</td><td>Any</td>
</tr>
<tr>
<td><a href="#Half-Orc">Half-Orc</a></td> <td>+2 Strength(Str) -2 Intelligence(Int) -2 Charisma(Cha)</td><td>Barbarian</td>
</tr>
<tr>
<td><a href="#Halfling">Halfling</a></td> <td>+2 Dexterity(Dex) -2 Strength(Str)</td><td>Rogue</td>
</tr>
</table>
<br><br>
<p><h3><a id="Human">HUMAN RACIAL TRAITS</a></h3><br>
<ul>
<li> Medium: As Medium creatures, humans have no special bonuses
or penalties due to their size.</li>
<li>Human base land speed is 30 feet.</li>
<li>1 extra feat at 1st level, because humans are quick to master
specialized tasks and varied in their talents. See <a href="feats.html"> Feats </a>.</li>
<li>4 extra skill points at 1st level and 1 extra skill point at each
additional level, since humans are versatile and capable. (The 4
skill points at 1st level are added on as a bonus, not multiplied in;
see <a href="skills.html"> Skills </a>.)</li>
<li>Automatic Language: Common. Bonus Languages: Any (other
than secret languages, such as Druidic). See other racial lists for
common languages or the Speak Language skill for a
more comprehensive list. Humans mingle with all kinds of other
folk and thus can learn any language found in an area.</li>
<li>Favored Class: Any. When determining whether a multiclass human
takes an experience point penalty, her highest-level class
does not count.</li>
</ul>
</p><br><br>



<p><h3><a id="Dwarf">DWARF RACIAL TRAITS</a></h3><br>
<ul>
<li> +2 Constitution, &#45;2 Charisma: Dwarves are stout and tough but
tend to be gruff and reserved.</li>
<li>Medium: As Medium creatures, dwarves have no special bonuses
or penalties due to their size.</li>
<li>Dwarf base land speed is 20 feet. However, dwarves can move at
this speed even when wearing medium or heavy armor or whose
speed is reduced in such conditions).</li>
<li>Darkvision: Dwarves can see in the dark up to 60 feet. Darkvision
is black and white only, but it is otherwise like normal sight, and
dwarves can function just fine with no light at all.</li>
<li>Stonecunning: This ability grants a dwarf a +2 racial bonus on
Search checks to notice unusual stonework, such as sliding walls,
stonework traps, new construction (even when built to match the
old), unsafe stone surfaces, shaky stone ceilings, and the like.
Something that is not stone but that is disguised as stone also
counts as unusual stonework. A dwarf who merely comes within
10 feet of unusual stonework can make a Search check as if he
were actively searching, and a dwarf can use the Search skill to
find stonework traps as a rogue can. A dwarf can also intuit depth,
sensing his approximate depth underground as naturally as a
human can sense which way is up. Dwarves have a sixth sense
about stonework, an innate ability that they get plenty of
opportunity to practice and hone in their underground homes.</li>
<li>Weapon Familiarity: Dwarves may treat dwarven waraxes and
dwarven urgroshes (see <a href="equipment.html"> Equipment</a>) as martial
weapons, rather than exotic weapons.</li>
<li>Stability: Dwarves are exceptionally stable on their feet. A dwarf
gains a +4 bonus on ability checks made to resist being bull
rushed or tripped when standing on the ground (but not when
climbing, flying, riding, or otherwise not standing firmly on the
ground).</li>
<li>+2 racial bonus on saving throws against poison: Dwarves are
hardy and resistant to toxins.</li>
<li>+2 racial bonus on saving throws against spells and spell-like
effects: dwarves have an innate resistance to magic spells.</li>
<li>+1 racial bonus to attack rolls against orcs (including half-orcs)
and goblinoids (including goblins, hobgoblins, and bugbears):
Dwarves are trained in the special combat techniques that allow
them to fight their common enemies more effectively.</li>
<li>+4 dodge bonus to Armor Class against monsters of the giant type
(such as ogres, trolls, and hill giants): This bonus represents
special training that dwarves undergo, during which they learn
tricks that previous generations developed in their battles with
giants. Any time a creature loses its Dexterity bonus (if any) to
Armor Class, such as when it is caught flat-footed, it loses its dodge
bonus, too. The Monster Manual has information on which
creatures are of the giant type.</li>
<li>+2 racial bonus on Appraise checks that are related to stone or
metal items: Dwarves are familiar with valuable items of all kinds,
especially those made of stone or metal.</li>
<li>+2 racial bonus on Craft checks that are related to stone or metal:
Dwarves are especially capable with stonework and metalwork.</li>
<li>Automatic Languages: Common and Dwarven. Bonus Languages:
Giant, Gnome, Goblin, Orc, Terran, and Undercommon. Dwarves
are familiar with the languages of their enemies and of their
subterranean allies.</li>
<li>Favored Class: Fighter. A multiclass dwarf’s fighter class does not
count when determining whether he takes an experience point
penalty for multiclassing. Dwarven culture extols the virtues of battle, and the vocation
comes easily to dwarves.</li>
</ul></p><br><br>


<p><h3><a id="Elf">ELF RACIAL TRAITS</a></h3><br>
<ul>
<li>+2 Dexterity, &#45;2 Constitution: Elves are graceful but frail. An elf&#39;s
grace makes her naturally better at stealth and archery.</li>
<li>Medium: As Medium creatures, elves have no special bonuses or
penalties due to their size.</li>
<li>Elf base land speed is 30 feet.</li>
<li>Immunity to magic sleep effects, and a +2 racial saving throw
bonus against enchantment spells or effects.</li>
<li>Low-light Vision: An elf can see twice as far as a human in
starlight, moonlight, torchlight, and similar conditions of poor
illumination. She retains the ability to distinguish color and detail
under these conditions.</li>
<li>Weapon Proficiency: Elves receive the Martial Weapon Proficiency
feats for the longsword, rapier, longbow (including
composite longbow), and shortbow (including composite
shortbow) as bonus feats. Elves esteem the arts of swordplay and
archery, so all elves are familiar with these weapons.</li>
<li>+2 racial bonus on Listen, Search, and Spot checks. An elf who
merely passes within 5 feet of a secret or concealed door is
entitled to a Search check to notice it as if she were actively
looking for it. An elf&#39;s senses are so keen that she practically has a
sixth sense about hidden portals.</li>
<li>Automatic Languages: Common and Elven. Bonus Languages:
Draconic, Gnoll, Gnome, Goblin, Orc, and Sylvan. Elves commonly
know the languages of their enemies and of their friends,
as well as Draconic, the language commonly found in ancient
tomes of secret knowledge.</li>
<li>Favored Class: Wizard. A multiclass elf&#39;s wizard class does not
count when determining whether she takes an experience point
penalty for multiclassing. Wizardry comes naturally to elves&#45;indeed, they sometimes
claim to have invented it, and fighter/wizards are especially
common among them.</li>
</ul> </p><br><br>


<p><h3><a id="Gnome">GNOME RACIAL TRAITS</a></h3><br>
<ul>
<li>+2 Constitution, &#45;2 Strength: Like dwarves, gnomes are tough,
but they are small and therefore not as strong as larger
humanoids.</li>
<li>Small: As a Small creature, a gnome gains a +1 size bonus to
Armor Class, a +1 size bonus on attack rolls, and a +4 size bonus
on Hide checks, but he uses smaller weapons than humans use,
and his lifting and carrying limits are three-quarters of those of a
Medium character.</li>
<li>Gnome base land speed is 20 feet.</li>
<li>Low-light Vision: A gnome can see twice as far as a human in
starlight, moonlight, torchlight, and similar conditions of poor
illumination. He retains the ability to distinguish color and detail
under these conditions.</li>
<li>Weapon Familiarity: Gnomes may treat gnome hooked hammers
as martial weapons rather than exotic weapons.</li>
<li>+2 racial bonus on saving throws against illusions: Gnomes are
innately familiar with illusions of all kinds.</li>
<li>Add +1 to the Difficulty Class for all saving throws against
illusion spells cast by gnomes. Their innate familiarity with these
effects make their illusions more difficult to see through. This
adjustment stacks with those from similar effects, such as the
Spell Focus feat.</li>
<li>+1 racial bonus on attack rolls against kobolds and goblinoids
(including goblins, hobgoblins, and bugbears): Gnomes battle
these creatures frequently and practice special techniques for
fighting them.</li>
<li>+4 dodge bonus to Armor Class against monsters of the giant type
(such as ogres, trolls, and hill giants): This bonus represents
special training that gnomes undergo, during which they learn
tricks that previous generations developed in their battles with
giants. Any time a creature loses its Dexterity bonus (if any) to
Armor Class, such as when it&#39;s caught flat-footed, it loses its dodge
bonus, too. The Monster Manual has information on which
creatures are of the giant type.</li>
<li>+2 racial bonus on Listen checks: Gnomes have keen ears.</li>
<li>+2 racial bonus on Craft (alchemy) checks: A gnome&#39;s sensitive
nose allows him to monitor alchemical processes by smell.</li>
<li>Automatic Languages: Common and Gnome. Bonus Languages:
Draconic, Dwarven, Elven, Giant, Goblin, and Orc. Gnomes deal
more with elves and dwarves than elves and dwarves deal with
one another, and they learn the languages of their enemies
(kobolds, giants, goblins, and orcs) as well. In addition, a gnome
can use speak with a burrowing mammal (a badger, fox, rabbit, or
the like, see below). This ability is innate to gnomes.</li>
<li>Spell-Like Abilities: 1/day&#45;speak with animals (burrowing
mammal only, duration 1 minute). A gnome with a Charisma
score of at least 10 also has the following spell&#45;like abilities:
1/day&#45;dancing lights, ghost sound, prestidigitation. Caster level 1st;
save DC 10 + gnome&#39;s Cha modifier + spell level.</li>
<li>Favored Class: Bard. A multiclass gnome&#39;s bard class does not
count when determining whether he takes an experience point
penalty.</li>
</ul></p><br><br>


<p><h3><a id="Half-Elf">HALF-ELF RACIAL TRAITS</a></h3><br>
<ul>
<li>Medium: As Medium creatures, half-elves have no special
bonuses or penalties due to their size.</li>
<li>Half-elf base land speed is 30 feet.</li>
<li>Immunity to sleep spells and similar magical effects, and a +2 racial
bonus on saving throw against enchantment spells or effects.</li>
<li>Low-light Vision: A half-elf can see twice as far as a human in
starlight, moonlight, torchlight, and similar conditions of poor
illumination. She retains the ability to distinguish color and detail
under these conditions.</li>
<li>+1 racial bonus on Listen, Search, and Spot checks: A half-elf does
not have the elf&#39;s ability to notice secret doors simply by passing
near them. Half-elves have keen senses, but not as keen as those
of an elf.</li>
<li>+2 racial bonus on Diplomacy and Gather Information checks:
Half-elves get along naturally with all people.</li>
<li>Elven Blood: For all effects related to race, a half-elf is considered
an elf. Half-elves, for example, are just as vulnerable to special
effects that affect elves as their elf ancestors are, and they can use
magic items that are only usable by elves. (See the Monster Manual
for more information about elves, and the Dungeon Master&#39;s Guide
for more on magic items.)</li>
<li>Automatic Languages: Common and Elven. Bonus Languages:
Any (other than secret languages, such as Druidic). Half-elves
have all the versatility and broad (if shallow) experience that
humans have.</li>
<li>Favored Class: Any. When determining whether a multiclass halfelf
takes an experience point penalty, her highest-level class does
not count.</li>
</ul></p><br><br>


<p><h3><a id="Half-Orc">HALF-ORC RACIAL TRAITS</a></h3><br>
<ul>
<li>+2 Strength, &#45;2 Intelligence, &#45;2 Charisma: Half-orcs are strong,
but their orc lineage makes them dull and crude.</li>
<li>Medium: As Medium-creatures, half-orcs have no special bonuses
or penalties due to their size.</li>
<li>Half-orc base land speed is 30 feet.</li>
<li>Darkvision: Half-orcs (and orcs) can see in the dark up to 60 feet.
Darkvision is black and white only, but it is otherwise like normal
sight, and half-orcs can function just fine with no light at all.</li>
<li>Orc Blood: For all effects related to race, a half-orc is considered
an orc. Half-orcs, for example, are just as vulnerable to special
effects that affect orcs as their orc ancestors are, and they can use
magic items that are only usable by orcs. (See the Monster Manual
for more information about orcs, and the Dungeon Master&#39;s Guide
for more on magic items.)</li>
<li>Automatic Languages: Common and
Orc. Bonus Languages: Draconic,
Giant, Gnoll, Goblin, and
Abyssal. Smart half-orcs
(who are rare) may know
the languages of their
allies or rivals.</li>
<li>Favored Class: Barbarian.
A multiclass half-orc&#39;s
barbarian class does not
count when determining
whether he takes an experience
point penalty. Ferocity runs
in a half-orc&#39;s veins.</li>
</ul></p><br><br>

<p><h3><a id="Halfling">HALFLING RACIAL TRAITS</a></h3><br>
<ul>
<li>+2 Dexterity, &#45;2 Strength: Halflings are quick, agile, and good
with ranged weapons, but they are small and therefore not as
strong as other humanoids.</li>
<li>Small: As a Small creature, a halfling gains a +1 size bonus to
Armor Class, a +1 size bonus on attack rolls, and a +4 size bonus
on Hide checks, but she uses smaller weapons than humans use, 
and her lifting and carrying limits are three-quarters of those of a
Medium character.</li>
<li>Halfling base land speed is 20 feet.</li>
<li>+2 racial bonus on Climb, Jump, and Move Silently
checks: Halflings are agile, surefooted, and
athletic.</li>
<li>+1 racial bonus on all saving throws: Halflings
are surprisingly capable of avoiding mishaps.</li>
<li>+2 morale bonus on saving throws against
fear. This bonus stacks with the halfling&#39;s
+1 bonus on saving throws in general.</li>
<li>+1 racial bonus on attack rolls with a
thrown weapon and slings: Throwing and
slinging stones is a universal sport among
halflings, and they develop especially
good aim.</li>
<li>+2 racial bonus on Listen checks:
Halflings have keen ears.</li>
<li>Automatic Languages: Common
and Halfling. Bonus Languages:
Dwarven, Elven, Gnome, Goblin,
and Orc. Smart halflings learn
the languages of their friends
and enemies.</li>
<li>Favored Class: Rogue. A multiclass
halfling’s rogue class does not count when
determining whether she take an
experience point penalty for
multiclassing. Halflings have long had to rely
on stealth, wit, and skill, and
the vocation of rogue comes
naturally to them.</li>
</ul></p>
<?php
include "footer.php";
?>