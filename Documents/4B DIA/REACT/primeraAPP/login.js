import { StyleSheet, SafeAreaView, View, Image, Text } from "react-native";

export default function Login(){
    return (
        <SafeAreaView style={styles.container}>
          <View style={styles.firstSection}>
            <Image
              source={{
                uri: 'https://media.istockphoto.com/id/1415731858/es/foto/joven-mochilero-tomando-fotos-de-globos-aerost%C3%A1ticos-volando-en-goreme-en-capadocia-en-turqu%C3%ADa.jpg?s=612x612&w=0&k=20&c=CaJeMkEUAff4bFnr7oC-P68Yo2ekZ8gqy5pqEXZ3r80=',
              }}
              style={{ width: '100%', height: '120%', resizeMode: 'cover' }}
            />
            <View style={{ position: 'absolute' }}>
              <Text style={styles.title}>Revelo</Text>
            </View>
          </View>
      
          <View style={styles.secondSection}>

          </View>
        </SafeAreaView>
    );
}
export const styles = StyleSheet.create({   
    container: {
        flex: 1,
        backgroundColor: '#FFF',
        alignItems: 'center',
        justifyContent: 'center',
        
    },
    fisrtSection:{
        flex:1,
        alignItems: 'center',
        justifyContent: 'center',
        backgroundColor: "green",
        width: "100%"
    },
    secondSection:{
        flex:1,
        alignItems: 'center',
        justifyContent: 'center',
        backgroundColor: 'white',
        width: "100%",
        borderTopRightRadius: 25,
        borderTopLeftRadius: 25,
        padding: 20,
    },
    title: {
       fontSize: 48,
       color: "white", 
    }
})