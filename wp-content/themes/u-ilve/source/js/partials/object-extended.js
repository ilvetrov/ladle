Object.prototype.map = function(callback) {
  const newObject = {};

  for (const key in this) {
    if (Object.hasOwnProperty.call(this, key)) {
      const element = this[key];
      newObject[key] = callback(element, key);
    }
  }

  return newObject;
}