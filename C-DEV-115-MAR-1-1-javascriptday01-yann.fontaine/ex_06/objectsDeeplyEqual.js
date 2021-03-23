function isAnObject(object) {
    return object != null && typeof object === 'object';
  }
  
function objectsDeeplyEqual(object1, object2) {
    const keys1 = Object.keys(object1);
    const keys2 = Object.keys(object2);
  
    if (keys1.length !== keys2.length) {
      return false;
    }
  
    for (const key of keys1) {
      const value1 = object1[key];
      const value2 = object2[key];
      const areObjects = isAnObject(value1) && isAnObject(value2);
      if (areObjects && !objectsDeeplyEqual(value1, value2) || !areObjects && value1 !== value2) {
        return false;
      }
    }
  
    return true;
  }

var obj = {here: {is: "an"}, object: 2};

console.log(objectsDeeplyEqual(obj, obj));
console.log(objectsDeeplyEqual(obj, {here: 1, object: 2}));
console.log(objectsDeeplyEqual(obj, {here: {is: "an"}, object: 2}));