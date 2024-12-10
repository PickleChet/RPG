$(function(){

    $('#human').on({
        mouseover: function(){
            $('#human').attr('src','img/humanhover.png');
        },
        mouseout: function(){
            $('#human').attr('src','img/human.png');
        },
    });

    $('#elf').on({
        mouseover: function(){
            $('#elf').attr('src','img/elfhover.png');
        },
        mouseout: function(){
            $('#elf').attr('src','img/elf.png');
        },
    });

    $('#dwarf').on({
        mouseover: function(){
            $('#dwarf').attr('src','img/dwarfhover.png');
        },
        mouseout: function(){
            $('#dwarf').attr('src','img/dwarf.png');
        },
    });

    $('#hobbit').on({
        mouseover: function(){
            $('#hobbit').attr('src','img/hobbithover.png');
        },
        mouseout: function(){
            $('#hobbit').attr('src','img/hobbit.png');
        },
    });

});