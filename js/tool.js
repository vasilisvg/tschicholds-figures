var btn = document.querySelectorAll('.control button');
var i = 0;
while( i<btn.length ) {
    btn[i].onclick = function(){
        adjustSize(this);
        return false;
    }
    i++;
}

function adjustSize($this) {
    var vw = document.documentElement.clientWidth;
    var vh = document.documentElement.clientHeight;
    var ml = document.querySelector($this.getAttribute('data-for'));
    var direction = $this.getAttribute('data-direction');
    var plusmin = $this.value;

    // set the variables
    if (direction === 'left') {
        marginOffset = window.getComputedStyle(ml,null).getPropertyValue("margin-left");
        sizeOffset = window.getComputedStyle(ml,null).getPropertyValue("width");
        if (plusmin === 'plus') {
            var marginUnit = '1';
            var sizeUnit = '-1';
        }
        if (plusmin === 'min') {
            var marginUnit = '-1';
            var sizeUnit = '1';
        }
        sizesArr = returnDimensions(marginOffset,sizeOffset,marginUnit,sizeUnit,vw,5.5555555);
        ml.style.marginLeft = sizesArr.split('+')[0]+'%';
        ml.style.width = sizesArr.split('+')[1]+'%';
    }
    if (direction === 'right') {
        marginOffset = window.getComputedStyle(ml,null).getPropertyValue("margin-right");
        sizeOffset = window.getComputedStyle(ml,null).getPropertyValue("width");
        if (plusmin === 'plus') {
            var marginUnit = '-1';
            var sizeUnit = '1';
        }
        if (plusmin === 'min') {
            var marginUnit = '1';
            var sizeUnit = '-1';
        }
        sizesArr = returnDimensions(marginOffset,sizeOffset,marginUnit,sizeUnit,vw,5.5555555);
        ml.style.marginRight = sizesArr.split('+')[0]+'%';
        ml.style.width = sizesArr.split('+')[1]+'%';
    }
    if (direction === 'top') {
        marginOffset = window.getComputedStyle(ml,null).getPropertyValue("padding-top");
        sizeOffset = window.getComputedStyle(ml,null).getPropertyValue("min-height");
        //console.log(sizeOffset);
        if (plusmin === 'plus') {
            var marginUnit = '1';
            var sizeUnit = '-1';
        }
        if (plusmin === 'min') {
            var marginUnit = '-1';
            var sizeUnit = '1';
        }
        sizesArr = returnDimensions(marginOffset,sizeOffset,marginUnit,sizeUnit,vh,11.1111111);
        ml.style.paddingTop = sizesArr.split('+')[0] + 'vh';
        //ml.style.minHeight = sizesArr.split('+')[1] + 'vh';
    }
    if (direction === 'bottom') {
        marginOffset = window.getComputedStyle(ml,null).getPropertyValue("padding-bottom");
        sizeOffset = window.getComputedStyle(ml,null).getPropertyValue("min-height");
        //console.log(sizeOffset);
        if (plusmin === 'plus') {
            var marginUnit = '-1';
            var sizeUnit = '1';
        }
        if (plusmin === 'min') {
            var marginUnit = '1';
            var sizeUnit = '-1';
        }
        sizesArr = returnDimensions(marginOffset,sizeOffset,marginUnit,sizeUnit,vh,11.1111111);
        ml.style.paddingBottom = sizesArr.split('+')[0] + 'vh';
        //ml.style.minHeight = sizesArr.split('+')[1] + 'vh';
        setTimeout(function(){
            window.scrollTo( 0, 100000 );
        }, 300);
    }


    //console.log(direction);
}

function returnDimensions(marginOffset,sizeOffset,marginUnit,sizeUnit,vmin,fact){
    marginOffset = marginOffset.split('px')[0];
    sizeOffset = sizeOffset.split('px')[0];

    currMargin =  ( (marginOffset/vmin)*100 );
    currMargin = Math.round(currMargin/fact);
    newMargin = ((currMargin*1) + (marginUnit*1)) * fact;
    //ml.style.marginLeft = newMargin;

    currSize = ((sizeOffset/vmin)*100 );
    currSize = (Math.round(currSize/fact));
    newSize = ((currSize*1) + (sizeUnit*1)) * fact;

    return (newMargin +'+'+newSize );
}
