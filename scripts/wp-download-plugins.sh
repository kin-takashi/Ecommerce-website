#!/bin/bash

# list of plugins
declare -a plugins=(
'advanced-custom-fields.zip' 'https://codeload.github.com/wp-premium/advanced-custom-fields-pro/zip/5.8.4'
'akismet.zip' 'https://downloads.wordpress.org/plugin/akismet.latest-stable.zip'
'categories-in-hierarchical-order.zip' 'https://downloads.wordpress.org/plugin/categories-in-hierarchical-order.latest-stable.zip'
'duplicate-post.zip' 'https://downloads.wordpress.org/plugin/duplicate-post.latest-stable.zip'
'ninjafirewall.zip' 'https://downloads.wordpress.org/plugin/ninjafirewall.latest-stable.zip'
'simple-custom-post-order.zip' 'https://downloads.wordpress.org/plugin/simple-custom-post-order.latest-stable.zip'
'tinymce-advanced.zip' 'https://downloads.wordpress.org/plugin/tinymce-advanced.latest-stable.zip'
'wordpress-importer.zip' 'https://downloads.wordpress.org/plugin/wordpress-importer.latest-stable.zip'
'wp-multibyte-patch.zip' 'https://downloads.wordpress.org/plugin/wp-multibyte-patch.latest-stable.zip'
'wp-pagenavi.zip' 'https://downloads.wordpress.org/plugin/wp-pagenavi.latest-stable.zip'
'ninjascanner.zip' 'https://downloads.wordpress.org/plugin/ninjascanner.latest-stable.zip'
'siteguard.zip' 'https://downloads.wordpress.org/plugin/siteguard.latest-stable.zip'
)

# get length of an array
arraylength=${#plugins[@]}

ROOT_PATH=./downloads/plugins

# create folder containing
mkdir -p $ROOT_PATH

# Remove all old download file
rm -rf $ROOT_PATH/*
rm -rf $ROOT_PATH/*.*

# use for loop to read all values and indexes
for (( i=0; i<${arraylength}; i+=2 ));
do
  echo "Downloading: " ${plugins[$i]}

  # Download plugin and unarchive
  curl ${plugins[$i+1]} -o $ROOT_PATH/${plugins[$i]}
  # tar -xvf ./download/${plugins[$i]} -C download
  tar -xvf $ROOT_PATH/${plugins[$i]} -C $ROOT_PATH
done